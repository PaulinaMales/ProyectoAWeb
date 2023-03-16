<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

#FUNCIONAMIENTO
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $useradmin = User::create([
            'name' => 'ADMINISTRADOR',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'rol_id' => '1',
        ]);
        
        $user1 = User::create([
            'name' => 'PRESIDENTE',
            'email' => 'presidente@gmail.com',
            'password' => Hash::make('admin'),
            'rol_id' => '2',
        ]);
        
        $user2 = User::create([
            'name' => 'JUGADOR',
            'email' => 'jugador@gmail.com',
            'password' => Hash::make('admin'),
            'rol_id' => '3',
        ]);
        
    }
}
