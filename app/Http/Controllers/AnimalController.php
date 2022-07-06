<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->tipo == 'funcionario') {
            $animais = Animal::all();
            return view('funcionario.animal.index', compact('animais'));
        } else {
            $animais = Animal::where('statusadocao', false)->get();
            return view('tutor.animal.index', compact('animais'));
        }
    }

    public function create()
    {
        return view('funcionario.animal.create');
    }

    public function store(Request $request)
    {
        $animal = Animal::create($request->all());
        $animal->save();
        return redirect()->route('funcionario.animal.index');
    }

    public function show($id)
    {
        $animal = Animal::find($id);
        $user = Auth::user();
        if ($user->tipo == 'funcionario') {
            return view('funcionario.animal.show', compact('animal'));
        } else {
            return view('tutor.animal.show', compact('animal'));
        }
    }

    public function remove($id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        return $this->index();
    }

    public function edit($id)
    {
        $animal = Animal::find($id);
        return view('funcionario.animal.edit', compact('animal'));
    }

    public function update(Request $request)
    {
        $animal = Animal::find($request->id);
        $animal->nome = $request->nome;
        $animal->especie = $request->especie;
        $animal->raca = $request->raca;
        $animal->estadosaude = $request->estadosaude;
        $animal->necessidadeespecial = $request->necessidadeespecial;
        $animal->datanascimento = $request->datanascimento;
        $animal->datarecebimento = $request->datarecebimento;
        $animal->update();
        return $this->index();
    }
}
