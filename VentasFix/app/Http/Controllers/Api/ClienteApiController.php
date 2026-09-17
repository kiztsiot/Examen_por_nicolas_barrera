<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Rules\RutChileno;
use App\Rules\TelefonoChileno;
use Illuminate\Validation\Rule;

class ClienteApiController extends Controller
{
    public function index()
    {
        return response()->json(Cliente::orderBy('razon_social')->paginate(10));
    }

    public function store(Request $request)
    {
        $datos = $this->validarDatos($request);

        $cliente = Cliente::create($datos);

        return response()->json($cliente, 201);
    }

    public function show(Cliente $cliente)
    {
        return response()->json($cliente);
    }

    public function update(Request $request, Cliente $cliente)
    {
        $datos = $this->validarDatos($request, $cliente->id);

        $cliente->update($datos);

        return response()->json($cliente);
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return response()->json(null, 204);
    }

    private function validarDatos(Request $request, ?int $idActual = null): array
    {
        return $request->validate([
            'rut_empresa' => [
                'required', 'string', 'max:12', new RutChileno,
                Rule::unique('clientes', 'rut_empresa')->ignore($idActual),
            ],
            'rubro' => ['required', 'string', 'max:100'],
            'razon_social' => ['required', 'string', 'min:3', 'max:150'],
            'telefono' => ['required', 'string', new TelefonoChileno],
            'direccion' => ['required', 'string', 'max:255'],
            'contacto_nombre' => ['required', 'string', 'min:3', 'max:150'],
            'contacto_email' => ['required', 'string', 'email', 'max:150'],
        ]);
    }
}
