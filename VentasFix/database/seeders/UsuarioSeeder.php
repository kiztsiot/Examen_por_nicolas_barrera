<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Crea un usuario administrador de prueba, para no tener que
     * pasar por Tinker cada vez que se migra desde cero.
     */
    public function run(): void
    {
        Usuario::firstOrCreate(
            ['email' => 'admin@ventasfix.cl'],
            [
                'rut' => '11111111-1',
                'nombre' => 'Admin',
                'apellido' => 'VentasFix',
                'password' => 'password123',
            ]
        );
    }
}
