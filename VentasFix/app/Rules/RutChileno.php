<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class RutChileno implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $rut = strtoupper(str_replace(['.', ' '], '', (string) $value));

        if (! str_contains($rut, '-')) {
            $fail('El :attribute debe tener el formato 12345678-9.');

            return;
        }

        [$numero, $dv] = explode('-', $rut, 2);

        if ($numero === '' || ! ctype_digit($numero) || ! preg_match('/^[0-9K]$/', $dv)) {
            $fail('El :attribute no tiene un formato válido.');

            return;
        }

        $suma = 0;
        $multiplicador = 2;

        foreach (str_split(strrev($numero)) as $digito) {
            $suma += ((int) $digito) * $multiplicador;
            $multiplicador = $multiplicador === 7 ? 2 : $multiplicador + 1;
        }

        $resto = 11 - ($suma % 11);

        $dvEsperado = match ($resto) {
            11 => '0',
            10 => 'K',
            default => (string) $resto,
        };

        if ($dv !== $dvEsperado) {
            $fail('El :attribute ingresado no es válido (dígito verificador incorrecto).');
        }
    }
}
