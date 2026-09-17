<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TelefonoChileno implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Quita espacios y guiones para aceptar formatos como "+56 9 1234 5678" o "56-9-1234-5678"
        $telefono = preg_replace('/[\s\-]/', '', (string) $value);

        // Acepta +56 o 56 opcional al inicio, seguido de 9 dígitos (el primero entre 2 y 9)
        if (! preg_match('/^(\+?56)?[2-9]\d{8}$/', $telefono)) {
            $fail('El :attribute debe ser un número de teléfono chileno válido (ej: +56912345678).');
        }
    }
}
