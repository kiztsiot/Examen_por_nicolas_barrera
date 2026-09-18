<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    public function definition(): array
    {
        $precioNeto = fake()->randomFloat(2, 1000, 100000);

        return [
            'sku' => strtoupper(fake()->unique()->bothify('SKU-####')),
            'nombre' => fake()->words(3, true),
            'descripcion_corta' => fake()->sentence(8),
            'descripcion_larga' => fake()->paragraphs(4, true),
            'imagen' => 'productos/placeholder.jpg',
            'precio_neto' => $precioNeto,
            'precio_venta' => round($precioNeto * 1.19, 2),
            'stock_actual' => fake()->numberBetween(0, 100),
            'stock_minimo' => 5,
            'stock_bajo' => 10,
            'stock_alto' => 80,
        ];
    }
}
