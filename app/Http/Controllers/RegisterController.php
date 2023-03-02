<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'tipoUsuario' => ['required'],
            'terms' => 'required'
        ]);
        $user = User::create($attributes);
        auth()->login($user);

        return redirect('/dashboard');
    }
    public function create()
    {
        return view('auth.register');
        
        if ($data['tipoUsuario']=="0") {
            $idUsuario = User::orderBy('id', 'desc')->first()->id;
            User::create([
                'id' => $idUsuario,
                'email' => $data['sexo'],
                'password' => $data['FecNac'],
            ]);   
            return $user;
        }
    }
}
