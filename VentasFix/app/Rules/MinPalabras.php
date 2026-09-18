<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MinPalabras implements ValidationRule
{
    public function __construct(private int $minimo)
    {
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $palabras = array_filter(preg_split('/\s+/', trim((string) $value)));

        if (count($palabras) < $this->minimo) {
            $fail("El :attribute debe tener al menos {$this->minimo} palabras.");
        }
    }
}
