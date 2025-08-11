<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Cliente::create([
            'nombre' => 'Rosibel',
            'email' => 'rosibel@gmail.com',
            'telefono' => '12345678',
        ]);


    }
}