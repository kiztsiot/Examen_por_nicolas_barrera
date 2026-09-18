<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'rut_empresa' => $this->rutFalso(),
            'rubro' => fake()->randomElement(['Retail', 'Tecnología', 'Alimentos', 'Construcción']),
            'razon_social' => fake()->company(),
            'telefono' => '+569' . fake()->numerify('########'),
            'direccion' => fake()->streetAddress() . ', Santiago',
            'contacto_nombre' => fake()->name(),
            'contacto_email' => fake()->unique()->safeEmail(),
        ];
    }

    /**
     * Genera un rut de empresa con dígito verificador válido (módulo 11),
     * para que pase la regla RutChileno al usarlo en pruebas.
     */
    private function rutFalso(): string
    {
        $numero = fake()->unique()->numberBetween(60000000, 99999999);

        $suma = 0;
        $multiplicador = 2;

        foreach (str_split(strrev((string) $numero)) as $digito) {
            $suma += ((int) $digito) * $multiplicador;
            $multiplicador = $multiplicador === 7 ? 2 : $multiplicador + 1;
        }

        $resto = 11 - ($suma % 11);
        $dv = match ($resto) {
            11 => '0',
            10 => 'K',
            default => (string) $resto,
        };

        return "{$numero}-{$dv}";
    }
}
