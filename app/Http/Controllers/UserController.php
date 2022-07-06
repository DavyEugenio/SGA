<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller {

    public function index() {
        $user = Auth::user();
        if ($user->tipo == 'funcionario') {
            return view('funcionario.index', compact('user'));
        } else {
            return view('tutor.index', compact('user'));
        }
    }

    private function find($id) {
        return DB::table('users')->find($id);
    }

    public function list() {
        $tutores = User::where('tipo', 'tutor')->get();
        $funcionarios = User::where('tipo', 'funcionario')->get();
        return view('funcionario.user.list', compact('tutores', 'funcionarios'));
    }

    public function createFuncionario() {
        return view('funcionario.user.createf');
    }

    public function createTutor() {
        return view('funcionario.user.createt');
    }

    public function storeFuncionario(Request $request) {
        $request->merge(['tipo' => 'funcionario']);
        $user = User::create($request->all());
        $user->password = Hash::make($user->password);
        $user->save();
        return $this->list();
    }

    public function storeTutor(Request $request) {
        $request->merge(['tipo' => 'tutor']);
        $user = User::create($request->all());
        $user->password = Hash::make($user->password);
        $user->save();
        if (Auth::user() == null) {
            Auth::login($user);
            return $this->index();
        } else {
            return $this->list();
        }
    }

    public function showLogged() {
        $user = Auth::user();
        if ($user->tipo == 'funcionario') {
            return view('funcionario.show', compact('user'));
        } else {
            return view('tutor.show', compact('user'));
        }
    }

    public function show($id) {
        $user = $this->find($id);
        return view('funcionario.user.show', compact('user'));
    }

    public function removeLogged() {
        $user = Auth::user();
        if ($user != null) {
            $user->delete();
            Auth::logout();
        }
        return redirect()->route('/');
    }

    public function remove($id) {
        $loggedUser = Auth::user();
        if ($loggedUser->id == $id) {
            return $this->removeLogged();
        } else {
            DB::table('users')
                    ->where('id', $id)->delete();
            return $this->list();
        }
    }

    public function editLogged() {
        $user = Auth::user();
        if ($user->tipo == 'funcionario') {
            return view('funcionario.edit', compact('user'));
        } else {
            return view('tutor.edit', compact('user'));
        }
    }

    public function edit($id) {
        $loggedUser = Auth::user();
        $user = $this->find($id);
        if ($loggedUser->tipo == 'funcionario') {
            return view('funcionario.user.edit', compact('user'));
        } else {
            return redirect()->back()->with('msg', 'Acesso não autorizado');
        }
    }

    public function updateLogged(Request $request) {
        $user = Auth::user();
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->endereco = $request->endereco;
        $user->telefone = $request->telefone;
        $user->datanascimento = $request->datanascimento;
        $user->password = Hash::make($request->password);
        if ($user->tipo == 'funcionario') {
            $user->dataingresso = $request->dataingresso;
            $user->funcao = $request->funcao;
        }
        $user->update();
        Auth::login($user);
        return $this->index();
    }

    public function update(Request $request) {
        $atributtes = [
            'nome' => $request->nome,
            'email' => $request->email,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'datanascimento' => $request->datanascimento
        ];
        if ($this->find($request->id)->tipo == 'funcionario') {
            $atributtes += [
                'dataingresso' => $request->dataingresso,
                'funcao' => $request->funcao
            ];
        }
        DB::table('users')
                ->where('id', $request->id)
                ->update($atributtes);
        return $this->list();
    }

}
