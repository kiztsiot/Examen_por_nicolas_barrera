<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MaxPalabras implements ValidationRule
{
    public function __construct(private int $maximo)
    {
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $palabras = array_filter(preg_split('/\s+/', trim((string) $value)));

        if (count($palabras) > $this->maximo) {
            $fail("El :attribute no puede superar las {$this->maximo} palabras.");
        }
    }
}
