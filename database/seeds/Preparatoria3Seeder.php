<?php

use Illuminate\Database\Seeder;
use App\Models\PreparatoriaProcedencia;

class Preparatoria3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prep=new PreparatoriaProcedencia();
        $prep->clave_preparatoria='01DBP0001U';
		$prep->nombre_preparatoria=trim('CENTRO ESTUDIOS DE BACHILLERATO JESUS REYES HEROLES ');
		$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
		$id=$ef_id->id;
		$prep->entidades_federativas_id=$id;
		$prep->municipios_id=1;
		$prep->colonia='AGUASCALIENTES';
		$prep->servicio='BACHILLERATO GENERAL DE 3 AÑOS';
		$prep->sostenimiento='';
		$prep->save();
    }
}
