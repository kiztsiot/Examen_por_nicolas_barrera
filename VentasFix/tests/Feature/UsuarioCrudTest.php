<?php

namespace Tests\Feature;

use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsuarioCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_un_usuario_autenticado_puede_crear_otro_usuario(): void
    {
        $this->actingAs(Usuario::factory()->create());

        $response = $this->post(route('usuarios.store'), [
            'rut' => '11111111-1',
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'email' => 'juan@ventasfix.cl',
            'password' => 'password123',
        ]);

        $response->assertRedirect(route('usuarios.index'));
        $this->assertDatabaseHas('usuarios', ['email' => 'juan@ventasfix.cl']);
    }

    public function test_rechaza_un_email_que_no_sea_del_dominio_ventasfix(): void
    {
        $this->actingAs(Usuario::factory()->create());

        $response = $this->post(route('usuarios.store'), [
            'rut' => '11111111-1',
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'email' => 'juan@gmail.com',
            'password' => 'password123',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertDatabaseMissing('usuarios', ['email' => 'juan@gmail.com']);
    }

    public function test_rechaza_un_rut_con_digito_verificador_invalido(): void
    {
        $this->actingAs(Usuario::factory()->create());

        $response = $this->post(route('usuarios.store'), [
            'rut' => '11111111-9', // dígito verificador incorrecto
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'email' => 'juan2@ventasfix.cl',
            'password' => 'password123',
        ]);

        $response->assertSessionHasErrors('rut');
    }

    public function test_un_invitado_no_puede_acceder_al_listado_de_usuarios(): void
    {
        $this->get(route('usuarios.index'))->assertRedirect(route('login'));
    }
}
