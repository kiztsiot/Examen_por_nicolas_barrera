<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Rules\RutChileno;
use Illuminate\Validation\Rule;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('nombre')->paginate(10);

        return view('pages.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('pages.usuarios.create');
    }

    public function store(Request $request)
    {
        $datos = $this->validarDatos($request);

        Usuario::create($datos);

        return redirect()
            ->route('usuarios.index')
            ->with('success', 'Usuario creado correctamente.');
    }

    public function show(Usuario $usuario)
    {
        return view('pages.usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        return view('pages.usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $datos = $this->validarDatos($request, $usuario->id);

        // Si no se escribió una password nueva, no se sobreescribe la actual
        if (empty($datos['password'])) {
            unset($datos['password']);
        }

        $usuario->update($datos);

        return redirect()
            ->route('usuarios.index')
            ->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()
            ->route('usuarios.index')
            ->with('success', 'Usuario eliminado correctamente.');
    }

    /**
     * Reglas de validación comunes para store() y update().
     * $idActual se usa para que la regla "unique" ignore el propio registro al editar.
     */
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
                'regex:/^[a-zA-Z0-9._%+-]+@ventasfix\.cl$/', // dominio obligatorio @ventasfix.cl
                Rule::unique('usuarios', 'email')->ignore($idActual),
            ],
            'password' => [$esCreacion ? 'required' : 'nullable', 'string', 'min:8'],
        ], [
            'email.regex' => 'El email debe ser del dominio @ventasfix.cl.',
        ]);
    }
}
