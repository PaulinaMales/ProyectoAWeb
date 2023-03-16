<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

#FUNCIONAMIENTO
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rol1 = Roles::create([
            'id' => '1',
            'descripcion' => 'Administrador',
        ]);

        $rol2 = User::create([
            'id' => '2',
            'descripcion' => 'Presidente',
        ]);
        $rol3 = User::create([
            'id' => '3',
            'descripcion' => 'Jugador',
        ]);
        $rol4 = User::create([
            'id' => '4',
            'descripcion' => 'Normal',
        ]);
    }
}
