<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Criação do usuário com a senha hasheada
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Aqui você já faz a hash
        ]);

        Auth::login($user);
        return redirect()->route('home')->with('user', Auth::user());
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home')->with('user', Auth::user());
        }

        return back()->withErrors([
            'email' => 'As credenciais estão incorretas.',
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
