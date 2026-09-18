<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Rules\RutChileno;
use Illuminate\Validation\Rule;

class UsuarioApiController extends Controller
{
    public function index()
    {
        return response()->json(Usuario::orderBy('nombre')->paginate(10));
    }

    public function store(Request $request)
    {
        $datos = $this->validarDatos($request);

        $usuario = Usuario::create($datos);

        return response()->json($usuario, 201);
    }

    public function show(Usuario $usuario)
    {
        return response()->json($usuario);
    }

    public function update(Request $request, Usuario $usuario)
    {
        $datos = $this->validarDatos($request, $usuario->id);

        if (empty($datos['password'])) {
            unset($datos['password']);
        }

        $usuario->update($datos);

        return response()->json($usuario);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return response()->json(null, 204);
    }

    private function validarDatos(Request $request, ?int $idActual = null): array
    {
        $esCreacion = is_null($idActual);

        return $request->validate([
            'rut' => [
                'required', 'string', 'max:12', new RutChileno,
                Rule::unique('usuarios', 'rut')->ignore($idActual),
            ],
            'nombre' => ['required', 'string', 'min:3', 'max:100'],
            'apellido' => ['required', 'string', 'min:3', 'max:100'],
            'email' => [
                'required', 'string', 'email', 'max:150',
                'regex:/^[a-zA-Z0-9._%+-]+@ventasfix\.cl$/',
                Rule::unique('usuarios', 'email')->ignore($idActual),
            ],
            'password' => [$esCreacion ? 'required' : 'nullable', 'string', 'min:8'],
        ], [
            'email.regex' => 'El email debe ser del dominio @ventasfix.cl.',
        ]);
    }
}
