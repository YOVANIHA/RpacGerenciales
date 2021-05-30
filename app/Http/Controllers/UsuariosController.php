<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rol;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Request\UsuarioRequest;

class UsuariosController extends Controller
{
    public function index()
    {
        /* $usuarios = User::orderBy('id', 'desc');
        //$roles = $usuarios->getRoleName();
        return view('usuarios.index', compact('usuarios'));*/

        $usuarios = DB::select(
            "SELECT * from users as u join rol as r on u.rol_id=r.rol_id"
        );
        return view('usuarios.index', [
            "usuarios" => $usuarios
        ]);
    }
    public function create()
    {
        $roles = Rol::all();
        return view('usuarios.create', [
            "roles" => $roles
        ]);
    }

    public function store(UsuarioRequest $request)
    {
        DB::transaction(function () use ($request) {
            User::create($request->only('rol_id', 'codigo_usuario', 'password', 'apellidos', 'nombres', 'dui', 'email', 'telefono', 'estado'));
        });

        return redirect()->route('users-index')->with('success', 'Usuario registrado con exito');
    }
    public function edit(User $usuario)
    {
        $roles = Rol::all();
        return view('usuarios.edit', compact('usuario', 'roles'));
    }


    public function update(Request $request, User $usuario)
    {
        $usuario->update($request->all());
        return redirect()->route('users-index')->with('success', 'Usuario actualizado con exito');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('users-index')->with('info', 'Usuario eliminado correctamente');
    }

    public function show(User $usuario, Request $request)
    {
        return view('usuarios.show', compact('usuario'));
    }
}