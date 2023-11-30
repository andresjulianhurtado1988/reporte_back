<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoyeriasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('joyerias')->insert(
            array(

                array(
                    "nombre_joyeria" => "Los Denarios",
                    "codigo_joyeria" => "DEN123",
                ),
                array(
                    "nombre_joyeria" => "Medellín",
                    "codigo_joyeria" => "MED456",
                ),
                array(
                    "nombre_joyeria" => "Itagui",
                    "codigo_joyeria" => "ITA789",
                ),
                array(
                    "nombre_joyeria" => "Envigado",
                    "codigo_joyeria" => "ENV012",
                ),
                array(
                    "nombre_joyeria" => "Universal",
                    "codigo_joyeria" => "UNI345",
                ),
                array(
                    "nombre_joyeria" => "Venecia",
                    "codigo_joyeria" => "VEN678",
                ),
                array(
                    "nombre_joyeria" => "Maravilla",
                    "codigo_joyeria" => "MAR901",
                ),
                array(
                    "nombre_joyeria" => "El Prado",
                    "codigo_joyeria" => "PRA234",
                ),
                array(
                    "nombre_joyeria" => "Midas",
                    "codigo_joyeria" => "MID567",
                ),


            )
        );
    }
}
