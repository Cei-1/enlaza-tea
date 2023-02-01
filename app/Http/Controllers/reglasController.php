<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class reglasController extends Controller
{
    public function reglasUsuarios(Request $request){
        $rules = [
            'name' => 'required|min:4|max:50|string',
            'email' => 'required|min:4|max:50|email',
            'telefono' => 'required|min:10|numeric',
            'password' => 'required|min:8|max:64',
            'password_confirmation' => 'required|min:8|max:64|same:password'  
        ];
        $detalle_mensaje = [
            'required' => '<br>Por favor llene el campo de :attribute',
            'string' => '<br>La descripción debe ser un texto describiendo el negocio',
            'numeric' => '<br>Por favor ingrese un número de telefono numérico',
            'min' => '<br>El :attribute requiere un mínimo de :min caracteres',
            'confirmed' => '<br>La contraseña y su confirmación no coinciden',
            'email' => '<br>El email es invalido',
            'same'=> '<br>Las contraseñas no coinciden'
        ];
        return $this->validate($request,$rules,$detalle_mensaje);
    }

    public function reglasEditarUsuarios(Request $request){
        
        $rules = [
            'name' => 'required|min:4|max:50|string',
            'email' => 'required|min:4|max:50|email',
            'telefono' => 'required|min:10|numeric',           
        ];
        $detalle_mensaje = [
            'required' => '<br>Por favor llene el campo de :attribute',
            'string' => '<br>La descripción debe ser un texto describiendo el negocio',
            'numeric' => '<br>Por favor ingrese un número de telefono numérico',
            'min' => '<br>El :attribute requiere un mínimo de :min caracteres',
            'email' => '<br>El email es invalido',
        ];
        return $this->validate($request,$rules,$detalle_mensaje);
    }

    public function reglasCliente($request) {
        $rules = [
            'telefono' => 'required|alpha',
            'f_nacimiento' => 'required'
        ];
        $detalle_mensaje = [
            'required' => '<br>Por favor llene el campo de :attribute',
            'alpha' => '<br>Por favor utilice solamente letras en el campo :attribute'
        ];
        return $this->validate($request, $rules, $detalle_mensaje);
    }
}
