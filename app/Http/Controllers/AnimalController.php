<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    public function create()
    {
        return view('animals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sexo' => 'required|string|max:10',
            'nascimento' => 'required|date',
            'prenhez' => 'nullable|boolean',
            'mae_id' => 'nullable|exists:animais,id',
            'pai_id' => 'nullable|exists:animais,id',
        ]);

        $path = $request->file('imagem') ? $request->file('imagem')->store('imagens_animais', 'public') : null;

        $animal = new Animal([
            'nome' => $request->nome,
            'imagem' => $path,
            'sexo' => $request->sexo,
            'nascimento' => $request->nascimento,
            'prenhez' => $request->prenhez ?? false,
            'mae_id' => $request->mae_id,
            'pai_id' => $request->pai_id,
        ]);

        $animal->save();

        return redirect()->route('animals.index')->with('success', 'Animal criado com sucesso.');
    }

    public function destroy(Animal $animal)
    {
        $animal->update(['ativo' => false]);
        return redirect()->route('animals.index')->with('success', 'Animal excluido com sucesso.');
    }
}
