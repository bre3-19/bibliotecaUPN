<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clasificacion;

class ClasificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clasificaciones = [
            ['clasificacion' => 'Sin Clasificación'],
            ['clasificacion' => 'Psicología'],
            ['clasificacion' => 'Pedagogía'],
            ['clasificacion' => 'Novelas Literarias Y Románticas'],
            ['clasificacion' => 'Política Y Reformas'],
            ['clasificacion' => 'Valores Y Ética'],
            ['clasificacion' => 'Filosofía'],
            ['clasificacion' => 'FOMES'],
            ['clasificacion' => 'Noveduc'],
            ['clasificacion' => 'C.M.I.E.'],
            ['clasificacion' => 'Educación Media Superior'],
            ['clasificacion' => 'Biblioteca del Normalista'],
            ['clasificacion' => 'Biblioteca para la Actualización del Maestro'],
            ['clasificacion' => 'R.I.E.B.'],
            ['clasificacion' => 'Enciclopedia'],
            ['clasificacion' => 'Historia'],
            ['clasificacion' => 'Ciencia, Tecnología Y Otros'],
            ['clasificacion' => 'Extracción 2010 A'],
            ['clasificacion' => 'Extracción 2010 B'],
            ['clasificacion' => 'Extracción 2012 A'],
            ['clasificacion' => 'Extracción 2012 B'],
            ['clasificacion' => 'Extracción 2012 C'],
            ['clasificacion' => 'Extracción 2015 A'],
            ['clasificacion' => 'Diversos'],
            ['clasificacion' => 'Música'],
            ['clasificacion' => 'Alimentación Y Nutrición'],
            ['clasificacion' => 'Gramática, Lectura Y Redacción'],
            ['clasificacion' => 'Comunicación'],
            ['clasificacion' => 'Economía'],
            ['clasificacion' => 'Sociología'],
            ['clasificacion' => 'Plan de Estudios'],
            ['clasificacion' => 'Aprendizajes Clave'],
            ['clasificacion' => 'Guía para Maestro'],
            ['clasificacion' => 'Educación Básica'],
            ['clasificacion' => 'Educación Inicial'],
            ['clasificacion' => 'I.N.B.A.'],
            ['clasificacion' => 'Maestría en Docencia en Innovación'],
            ['clasificacion' => 'Maestría en Educación Básica'],
            ['clasificacion' => 'Maestría en Educación Media Superior'],
            ['clasificacion' => 'Doctorado en Desarrollo Educativo'],
            ['clasificacion' => 'Licenciatura en Psicología Educativa'],
            ['clasificacion' => 'Licenciatura en Educación Plan 85'],
            ['clasificacion' => 'Licenciatura en Pedagogía'],
            ['clasificacion' => 'El Proceso de Titulación'],
            ['clasificacion' => 'Proyecto de Intervención Educativa'],
            ['clasificacion' => 'Licenciatura en Educación Plan 94'],
            ['clasificacion' => 'Modalidad Ensayo Educación Plan 85'],
            ['clasificacion' => 'Modalidad Ensayo Educación Plan 94'],
            ['clasificacion' => 'Licenciatura en Intervención Educativa'],
            ['clasificacion' => 'Licenciatura en Educación Primaria'],
            ['clasificacion' => 'Modalidad Ensayo Psicología Educativa'],
            ['clasificacion' => 'Antología M.E.D.I.E.'],
            ['clasificacion' => 'Maestría en Ciencias de Educación Superior'],
            ['clasificacion' => 'Proyecto de Innovación Educación Plan 94'],
            ['clasificacion' => 'Area UPN Ajusco'],
            ['clasificacion' => 'Area UPN La Paz, BCS'],
            ['clasificacion' => 'Revista Diversa'],
            ['clasificacion' => 'ANUIES'],
            ['clasificacion' => 'COBACH'],
            ['clasificacion' => 'Antología de LE 94'],
            ['clasificacion' => 'Baja California Sur y Baja California'],
            ['clasificacion' => 'Cuento'],
            ['clasificacion' => 'Educación y Perspectiva de Genero'],
        ];

        Clasificacion::insert($clasificaciones);
    }
}
