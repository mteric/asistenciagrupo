<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Recurso::create([
            'nombre' => 'Proyecto Final',
            'materia' => 'Desarrollo Web',
            'cuatrimestre' => 8,
            'docente' => 'Ing. Luis Alfredo',
        ]);

        Recurso::create([
            'nombre' => 'Investigación',
            'materia' => 'Base de Datos',
            'cuatrimestre' => 6,
            'docente' => 'Mtra. Marisol lara',
        ]);
    }
}
