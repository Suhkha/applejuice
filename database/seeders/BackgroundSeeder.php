<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Background;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pathologics = ["Negado", "DM","HTA","Colitis","Gastritis","Deposiciones","Diarrea","Agruras","Estreñimiento","Vómito","Hipertiroidismo","Hipotiroidismo","Otros","Quirúrgicos","Cáncer"];

        for ($i=0; $i < count($pathologics); $i++) { 
            $pathologic = new Background;
            $pathologic->name = $pathologics[$i];
            $pathologic->details = 'Sin comentarios';
            $pathologic->type = 0;
            $pathologic->status = 1;
            $pathologic->save();
        }

        $noPathologics = ["Negado","Cigarros","Drogas","Alcohol","Actividad física","Horas de sueño","Lugar de alimentos","Quién los prepara?","Alergías"];

        for ($j=0; $j < count($noPathologics); $j++) {
            $noPathologic = new Background;
            $noPathologic->name = $noPathologics[$j];
            $noPathologic->details = 'Sin comentarios';
            $noPathologic->type = 1;
            $noPathologic->status = 1;
            $noPathologic->save();
        }
    }
}
