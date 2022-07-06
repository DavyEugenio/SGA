<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Adocao;
use App\Models\Animal;
use App\Models\User;

class AdocaoController extends Controller {

    public function index() {
        $user = Auth::user();
        if ($user->tipo == 'funcionario') {
            $adocoes = Adocao::all();
            return view('funcionario.adocao.index', compact('adocoes'));
        } else {
            $adocoes = $user->adocoes;
            return view('tutor.adocao.index', compact('adocoes'));
        }
    }

    public function create() {
        $user = Auth::user();
        $animais = Animal::where('statusadocao', false)->get();
        if ($user->tipo == 'funcionario') {
            $tutores = User::where('tipo', 'tutor')->get();
            return view('funcionario.adocao.create', compact('animais', 'tutores'));
        } else {
            return view('funcionario.adocao.create', compact('animais'));
        }
    }

    public function store(Request $request) {
        $user = Auth::user();
        $request->merge(['datasolicitacao' => now()]);
        if ($user->tipo == 'tutor') {
            $request->merge(['tutor_id' => $user->id]);
        }
        $adocao = Adocao::create($request->all());
        $adocao->save();
        return $this->index();
    }

    public function show($id) {
        $adocao = Adocao::find($id);
        $user = Auth::user();
        if ($user->tipo == 'funcionario') {
            return view('funcionario.adocao.show', compact('adocao'));
        } else {
            return view('tutor.adocao.show', compact('adocao'));
        }
    }

    public function remove($id) {
        $adocao = Adocao::find($id);
        if ($adocao->status == 'Aprovada' && $adocao->animal->statusadocao) {
            $adocao->animal->adotar(false);
        }
        $adocao->delete();
        return $this->index();
    }

    public function edit($id) {
        $adocao = Adocao::find($id);
        $user = $adocao->tutor;
        return view('funcionario.adocao.edit', compact('adocao', 'user'));
    }
    
    public function cancel($id) {
        $adocao = Adocao::find($id);
        $logged = Auth::user();
        $user = $adocao->tutor;
        if($logged->id == $user->id){
            $adocao->status = 'Cancelada';
            $adocao->update();
        }
        return $this->index();
    }
    
    public function update(Request $request) {
        $adocao = Adocao::find($request->id);
        $user = Auth::user();
        $adocao->status = $request->status;
        if ($user->tipo == 'funcionario') {
            $adocao->funcionario_id = $user->id;
            $adocao->dataapuracao = now();
        }
        $adocao->update();
        if ($adocao->status == 'Aprovada') {
            $adocao->animal->adotar(true);
            Adocao::where('id', '!=', $adocao->id)->where('animal_id', $adocao->animal->id)->where('status', 'Em Espera')->update(['status' => 'Cancelada']);
        }
        if ($adocao->status != 'Aprovada' && $adocao->animal->statusadocao) {
            $adocao->animal->adotar(false);
        }
        return $this->index();
    }

}
