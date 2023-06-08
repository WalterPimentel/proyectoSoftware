<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Maglioni Arana Caparachin',
            'email'    => 'marana@continental.edu.pe',
            'password' => bcrypt('Sistemas@Conti')
        ])->assignRole('Admin');

        User::create([
            'name'     => 'Jefe Proceso PPP',
            'email'    => 'jprocesoppp@continental.edu.pe',
            'password' => bcrypt('Sistemas@Conti')
        ])->assignRole('Jefe Proceso PPP');

        User::create([
            'name'     => 'Hugo Walter Vicente Pimentel Palomino',
            'email'    => '70056787@continental.edu.pe',
            'password' => bcrypt('Sistemas@Conti')
        ])->assignRole('Jefe Proceso GPI');

        User::create([
            'name'     => 'Secretaria Proceso GPI',
            'email'    => 'sprocesogpi@continental.edu.pe',
            'password' => bcrypt('Sistemas@Conti')
        ])->assignRole('Secretaria Proceso GPI');

        User::create([
            'name'     => 'Jefe Proceso CF',
            'email'    => 'jprocesocf@continental.edu.pe',
            'password' => bcrypt('Sistemas@Conti')
        ])->assignRole('Jefe Proceso CF');
    }
}
