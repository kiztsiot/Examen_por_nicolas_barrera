<?php

namespace Tests\Unit;

use App\Rules\RutChileno;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class RutChilenoTest extends TestCase
{
    public function test_acepta_un_rut_con_digito_verificador_correcto(): void
    {
        $validator = Validator::make(
            ['rut' => '12345678-5'],
            ['rut' => [new RutChileno]]
        );

        $this->assertFalse($validator->fails());
    }

    public function test_rechaza_un_rut_con_digito_verificador_incorrecto(): void
    {
        $validator = Validator::make(
            ['rut' => '12345678-9'],
            ['rut' => [new RutChileno]]
        );

        $this->assertTrue($validator->fails());
    }

    public function test_rechaza_un_rut_sin_guion(): void
    {
        $validator = Validator::make(
            ['rut' => '123456785'],
            ['rut' => [new RutChileno]]
        );

        $this->assertTrue($validator->fails());
    }

    public function test_acepta_dv_k(): void
    {
        $validator = Validator::make(
            ['rut' => '50000004-K'],
            ['rut' => [new RutChileno]]
        );

        $this->assertFalse($validator->fails());
    }
}
