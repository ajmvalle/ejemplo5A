<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enfermeria = new Especialidad([
            'name' => 'Enfermería',
        ]);

        $enfermeria->save();

        $rh = new Especialidad([
            'name' => 'Recursos Humanos',
        ]);

        $rh->save();

        $programacion = new Especialidad([
            'name' => 'Programación',
        ]);

        $programacion->save();

        $ofim = new Especialidad([
            'name' => 'Ofimática',
        ]);

        $ofim->save();

        $conta = new Especialidad([
            'name' => 'Contabilidad',
        ]);

        $conta->save();




    }
}
