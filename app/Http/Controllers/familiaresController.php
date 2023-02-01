<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Familiares;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class familiaresController extends Controller
{
    public function vista()
    {
        return view('pages.familiares');
    }

    /**
     * Función para obtener los datos de un cliente a través de su id de usuario
     */
    public function obtenerFamiliares($id_usuario){
        $datos_usuario = DB::table('datos_usuario')
            ->select('datos_usuario.*')
            ->where('datos_usuario.id_usuario','=',$id_usuario)
            ->get();
        return $datos_usuario;
    }
    /**
     * Función para obtener los datos para mostrar los detalles de un cliente
     */
    public function infoFamiliar($id_usuario){
        $detalles = DB::table('users')
            // ->join('direcciones', 'direcciones.id', '=', 'users.idDireccion')
            ->join('datos_usuario','datos_usuario.id_usuario','=','users.id')
            ->select('users.nombre', 'users.telefono',
                'datos_usuario.*')
            ->where('datos_usuario.id','=',$id_usuario)
            ->get();
        return $detalles;
    }

    public function listar() {
        $datos_usuario = DB::table('users')
           // ->join('direcciones', 'direcciones.id', '=', 'users.idDireccion')
            ->join('datos_usuario', 'datos_usuario.id_usuario', '=', 'users.id')
            ->select('users.*', 'datos_usuario.*')
            ->where('id_tipo_usuario', '=', 0)
            ->get();
        return $datos_usuario;
    }

    public function almacenarCliente(Request $request)
    {
        $reglas = new reglasController();
        $reglas->reglasUsuarios($request);
        $reglas->reglasCliente($request);
        $guardarUsuario = new UserController();
        $tipoUsuario = 0;
        $guardarUsuario->guardarUsuarios($request, $tipoUsuario);
        $nuevoCliente = new Clientes();
        $nuevoCliente->telefono = $request->telefono;
        $nuevoCliente->f_nacimiento = $request->f_nacimiento;
        $nuevoCliente->id_usuario = User::max('id');
        $nuevoCliente->save();
    }

    public function editarCliente(Request $request) {
        $reglas = new reglasController();
        $reglas->reglasEditarUsuarios($request);
        $reglas->reglasCliente($request);
        $usuarios = new UserController();
        $usuarios->editarUsuariosClientes($request);
        $cliente = Clientes::find($request->id);
        $cliente->telefono = $request->sexo;
        $cliente->f_nacimiento = $request->f_nacimiento;
        $cliente->save();
    }

    public function eliminarCliente($id_usuario)
    {
        $cliente = Clientes::find($id_usuario);
        $cliente->delete();
    }
}
