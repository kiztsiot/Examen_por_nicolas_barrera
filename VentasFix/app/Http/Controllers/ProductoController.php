<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Rules\MaxPalabras;
use App\Rules\MinPalabras;
use Illuminate\Validation\Rule;

class ProductoController extends Controller
{
    private const IVA = 0.19;

    public function index()
    {
        $productos = Producto::orderBy('nombre')->paginate(10);

        return view('pages.productos.index', compact('productos'));
    }

    public function create()
    {
        return view('pages.productos.create');
    }

    public function store(Request $request)
    {
        $datos = $this->validarDatos($request);
        $datos = $this->procesarImagen($request, $datos);
        $datos['precio_venta'] = $this->calcularPrecioVenta($datos['precio_neto']);

        Producto::create($datos);

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto creado correctamente.');
    }

    public function show(Producto $producto)
    {
        return view('pages.productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        return view('pages.productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $datos = $this->validarDatos($request, $producto->id);
        $datos = $this->procesarImagen($request, $datos, $producto);
        $datos['precio_venta'] = $this->calcularPrecioVenta($datos['precio_neto']);

        $producto->update($datos);

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Producto $producto)
    {
        if ($producto->imagen) {
            \Storage::disk('public')->delete($producto->imagen);
        }

        $producto->delete();

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto eliminado correctamente.');
    }

    private function validarDatos(Request $request, ?int $idActual = null): array
    {
        $reglas = [
            'sku' => [
                'required', 'string', 'max:50',
                Rule::unique('productos', 'sku')->ignore($idActual),
            ],
            'nombre' => ['required', 'string', 'max:150'],
            'descripcion_corta' => ['required', 'string', 'max:255', new MaxPalabras(50)],
            'descripcion_larga' => ['required', 'string', new MinPalabras(50)],
            'precio_neto' => ['required', 'numeric', 'min:0'],
            'stock_actual' => ['required', 'integer', 'min:0'],
            'stock_minimo' => ['required', 'integer', 'min:0'],
            'stock_bajo' => ['required', 'integer', 'min:0'],
            'stock_alto' => ['required', 'integer', 'min:0'],
        ];

        // La imagen solo es obligatoria al crear; al editar es opcional (se conserva la actual si no se sube otra)
        $reglas['imagen'] = [is_null($idActual) ? 'required' : 'nullable', 'image', 'max:2048'];

        return $request->validate($reglas);
    }

    /**
     * Sube la imagen nueva (si viene en el request) y devuelve $datos con la ruta actualizada.
     * Si no viene imagen nueva en una edición, se conserva la imagen actual del producto.
     */
    private function procesarImagen(Request $request, array $datos, ?Producto $producto = null): array
    {
        if ($request->hasFile('imagen')) {
            if ($producto && $producto->imagen) {
                \Storage::disk('public')->delete($producto->imagen);
            }
            $datos['imagen'] = $request->file('imagen')->store('productos', 'public');
        } else {
            unset($datos['imagen']);
        }

        return $datos;
    }

    private function calcularPrecioVenta(float $precioNeto): float
    {
        return round($precioNeto * (1 + self::IVA), 2);
    }
}
