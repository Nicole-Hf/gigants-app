<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'carnet_identidad' => '8955038',
                'nombre' => 'Analía',
                'apellidos' => 'Arce López',
                'email' => 'analia.lopez@gmail.com',
                'tipo' => 'ADMINISTRADOR'
            ]
        );
        Persona::insert($data);
    }
}
