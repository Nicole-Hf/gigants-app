<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserSeeder extends Seeder
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
                'name' => 'administrador',
                'email' => 'analia.lopez@gmail.com',
                'password' => 'ADMINISTRADOR',
                'persona_id' => 2
            ]
        );
        User::insert($data);
    }
}
