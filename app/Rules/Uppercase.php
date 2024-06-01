<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($value != str($value)->title()) {
            $fail("The :attribute does not start with an uppercased letter");
        }
    }
}