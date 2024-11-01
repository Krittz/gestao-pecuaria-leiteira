<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AnimalController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');
        $animals = Animal::where('user_id', Auth::id())
            ->when($search, function ($query, $search) {
                return $query->where('nome', 'like', '%' . $search . '%');
            })->get();


        return view('animals.index', compact('animals', 'search'));
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
        ]);

        $path = $request->file('imagem') ? $request->file('imagem')->store('imagens_animais', 'public') : null;

        $animal = new Animal([
            'nome' => $request->nome,
            'imagem' => $path,
            'sexo' => $request->sexo,
            'nascimento' => $request->nascimento,
            'prenhez' => $request->prenhez ?? false,
            'user_id' => Auth::id(),
        ]);

        if (!$animal->user_id) {
            return redirect()->back()->withErrors('Usuário não autenticado.');
        }

        $animal->save();

        return redirect()->route('animals.index')->with('success', 'Animal cadastrado com sucesso.');
    }

    public function destroy(Animal $animal)
    {
        $animal->update(['ativo' => false]);
        return redirect()->route('animals.index')->with('success', 'Animal excluido com sucesso.');
    }
}
