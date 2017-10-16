<?php

use Illuminate\Database\Seeder;

class EntidadFederativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  DB::Table('entidades_federativas')->insert([
['nombre_entidad'=>'Baja California','abreviatura'=>'BC','pais_id'=>154,'clave_entidad'=>2],
['nombre_entidad'=>'Baja California Sur','abreviatura'=>'BCS','pais_id'=>154,'clave_entidad'=>3],
['nombre_entidad'=>'Campeche','abreviatura'=>'Camp','pais_id'=>154,'clave_entidad'=>4],
['nombre_entidad'=>'Cohila de Zaragoza','abreviatura'=>'Chis','pais_id'=>154,'clave_entidad'=>5],
['nombre_entidad'=>'Colima','abreviatura'=>'Chih','pais_id'=>154,'clave_entidad'=>6],
['nombre_entidad'=>'Chiapas','abreviatura'=>'Coah','pais_id'=>154,'clave_entidad'=>7],
['nombre_entidad'=>'Chihuahua','abreviatura'=>'Col','pais_id'=>154,'clave_entidad'=>8],
['nombre_entidad'=>'Distrito Federal','abreviatura'=>'CDMX','pais_id'=>154,'clave_entidad'=>9],
['nombre_entidad'=>'Durango','abreviatura'=>'Dgo','pais_id'=>154,'clave_entidad'=>10],
['nombre_entidad'=>'Guanajuato','abreviatura'=>'Gto','pais_id'=>154,'clave_entidad'=>11],
['nombre_entidad'=>'Guerrero','abreviatura'=>'Gro','pais_id'=>154,'clave_entidad'=>12],
['nombre_entidad'=>'Hidalgo','abreviatura'=>'Hgo','pais_id'=>154,'clave_entidad'=>13],
['nombre_entidad'=>'Jalisco','abreviatura'=>'Jal','pais_id'=>154,'clave_entidad'=>14],
['nombre_entidad'=>'México','abreviatura'=>'Méx','pais_id'=>154,'clave_entidad'=>15],
['nombre_entidad'=>'Michoacán de Campo','abreviatura'=>'Mich','pais_id'=>154,'clave_entidad'=>16],
['nombre_entidad'=>'Morelos','abreviatura'=>'Mor','pais_id'=>154,'clave_entidad'=>17],
['nombre_entidad'=>'Nayarit','abreviatura'=>'Nay','pais_id'=>154,'clave_entidad'=>18],
['nombre_entidad'=>'Nuevo León','abreviatura'=>'NL','pais_id'=>154,'clave_entidad'=>19],
['nombre_entidad'=>'Oaxaca','abreviatura'=>'Oax','pais_id'=>154,'clave_entidad'=>20],
['nombre_entidad'=>'Puebla','abreviatura'=>'Pue','pais_id'=>154,'clave_entidad'=>21],
['nombre_entidad'=>'Querétaro','abreviatura'=>'Qro','pais_id'=>154,'clave_entidad'=>22],
['nombre_entidad'=>'Quintana Roo','abreviatura'=>'QR','pais_id'=>154,'clave_entidad'=>23],
['nombre_entidad'=>'San Luís Potosí','abreviatura'=>'SLP','pais_id'=>154,'clave_entidad'=>24],
['nombre_entidad'=>'Sinaloa','abreviatura'=>'Sin','pais_id'=>154,'clave_entidad'=>25],
['nombre_entidad'=>'Sonora','abreviatura'=>'Son','pais_id'=>154,'clave_entidad'=>26],
['nombre_entidad'=>'Tabasco','abreviatura'=>'Tab','pais_id'=>154,'clave_entidad'=>27],
['nombre_entidad'=>'Tamaulipas','abreviatura'=>'Tamps','pais_id'=>154,'clave_entidad'=>28],
['nombre_entidad'=>'Tlaxcala','abreviatura'=>'Tlax','pais_id'=>154,'clave_entidad'=>29],
['nombre_entidad'=>'Veracruz','abreviatura'=>'Ver','pais_id'=>154,'clave_entidad'=>30],
['nombre_entidad'=>'Yucatán','abreviatura'=>'Yuc','pais_id'=>154,'clave_entidad'=>31],
['nombre_entidad'=>'Zacatecas','abreviatura'=>'Zac','pais_id'=>154,'clave_entidad'=>32]
]);
    }
}
