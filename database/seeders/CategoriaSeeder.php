<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('categoria')->insert([
            [
                'id' => 1,
                'nombre_categoria' => 'Fonema',
            ],
            [
                'id' => 2,
                'nombre_categoria' => 'Ortografía',
            ],
            [
                'id' => 3,
                'nombre_categoria' => 'Lectura',
            ],
            [
                'id' => 4,
                'nombre_categoria' => 'Actividad'
            ]
        ]);
    }
}