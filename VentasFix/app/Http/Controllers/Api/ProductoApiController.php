<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Rules\MaxPalabras;
use App\Rules\MinPalabras;
use Illuminate\Validation\Rule;

class ProductoApiController extends Controller
{
    private const IVA = 0.19;

    public function index()
    {
        return response()->json(Producto::orderBy('nombre')->paginate(10));
    }

    public function store(Request $request)
    {
        $datos = $this->validarDatos($request);
        $datos = $this->procesarImagen($request, $datos);
        $datos['precio_venta'] = $this->calcularPrecioVenta($datos['precio_neto']);

        $producto = Producto::create($datos);

        return response()->json($producto, 201);
    }

    public function show(Producto $producto)
    {
        return response()->json($producto);
    }

    public function update(Request $request, Producto $producto)
    {
        $datos = $this->validarDatos($request, $producto->id);
        $datos = $this->procesarImagen($request, $datos, $producto);
        $datos['precio_venta'] = $this->calcularPrecioVenta($datos['precio_neto']);

        $producto->update($datos);

        return response()->json($producto);
    }

    public function destroy(Producto $producto)
    {
        if ($producto->imagen) {
            \Storage::disk('public')->delete($producto->imagen);
        }

        $producto->delete();

        return response()->json(null, 204);
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

        $reglas['imagen'] = [is_null($idActual) ? 'required' : 'nullable', 'image', 'max:2048'];

        return $request->validate($reglas);
    }

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
