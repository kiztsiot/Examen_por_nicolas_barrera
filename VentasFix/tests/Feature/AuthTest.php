<?php

namespace Tests\Feature;

use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_un_usuario_puede_iniciar_sesion_con_credenciales_correctas(): void
    {
        $usuario = Usuario::factory()->create(['password' => 'password123']);

        $response = $this->post('/login', [
            'email' => $usuario->email,
            'password' => 'password123',
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticatedAs($usuario);
    }

    public function test_no_deja_entrar_con_password_incorrecta(): void
    {
        $usuario = Usuario::factory()->create(['password' => 'password123']);

        $response = $this->post('/login', [
            'email' => $usuario->email,
            'password' => 'otra-clave',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_un_invitado_no_puede_ver_el_dashboard(): void
    {
        $this->get(route('dashboard'))->assertRedirect(route('login'));
    }
}
