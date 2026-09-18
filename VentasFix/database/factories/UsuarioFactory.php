<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'rut' => $this->rutFalso(),
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'email' => fake()->unique()->userName() . '@ventasfix.cl',
            'password' => 'password123',
        ];
    }

    /**
     * Genera un rut con dígito verificador válido (módulo 11),
     * para que pase la regla RutChileno al usarlo en pruebas.
     */
    private function rutFalso(): string
    {
        $numero = fake()->unique()->numberBetween(1000000, 25000000);

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
