<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Rules\RutChileno;
use App\Rules\TelefonoChileno;
use Illuminate\Validation\Rule;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('razon_social')->paginate(10);

        return view('pages.clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('pages.clientes.create');
    }

    public function store(Request $request)
    {
        $datos = $this->validarDatos($request);

        Cliente::create($datos);

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente creado correctamente.');
    }

    public function show(Cliente $cliente)
    {
        return view('pages.clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('pages.clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $datos = $this->validarDatos($request, $cliente->id);

        $cliente->update($datos);

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente eliminado correctamente.');
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
