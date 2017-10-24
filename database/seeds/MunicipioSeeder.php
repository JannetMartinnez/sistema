<?php

use Illuminate\Database\Seeder;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mun=new Municipio();
		$mun->nombre_municipio='AGUASCALIENTES';
		$mun->clave_entidad=1 ;
		$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
		$id=$ef_id->id;
		$mun->entidades_federativas_id=$id;
		$mun->save();


		$mun=new Municipio();
		$mun->nombre_municipio='ASIENTOS';
		$mun->clave_entidad=1 ;
		$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
		$id=$ef_id->id;
		$mun->entidades_federativas_id=$id;
		$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALVILLO';
$mun->clave_entidad=1 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COSÍO';
$mun->clave_entidad=1 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JESÚS MARÍA';
$mun->clave_entidad=1 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PABELLÓN DE ARTEAGA';
$mun->clave_entidad=1 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RINCÓN DE ROMOS';
$mun->clave_entidad=1 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ DE GRACIA';
$mun->clave_entidad=1 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEZALÁ';
$mun->clave_entidad=1 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL LLANO';
$mun->clave_entidad=1 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO DE LOS ROMO';
$mun->clave_entidad=1 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',1 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ENSENADA';
$mun->clave_entidad=2 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',2 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MEXICALI';
$mun->clave_entidad=2 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',2 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECATE';
$mun->clave_entidad=2 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',2 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIJUANA';
$mun->clave_entidad=2 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',2 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PLAYAS DE ROSARITO';
$mun->clave_entidad=2 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',2 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COMONDÚ';
$mun->clave_entidad=3 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',3 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MULEGÉ';
$mun->clave_entidad=3 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',3 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA PAZ';
$mun->clave_entidad=3 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',3 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LOS CABOS';
$mun->clave_entidad=3 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',3 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LORETO';
$mun->clave_entidad=3 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',3 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALKINÍ';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAMPECHE';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CARMEN';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAMPOTÓN';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HECELCHAKÁN';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HOPELCHÉN';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PALIZADA';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENABO';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ESCÁRCEGA';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALAKMUL';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CANDELARIA';
$mun->clave_entidad=4 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',4 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ABASOLO';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACUÑA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALLENDE';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARTEAGA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CANDELA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CASTAÑOS';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUATRO CIÉNEGAS';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ESCOBEDO';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FRANCISCO I. MADERO';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FRONTERA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL CEPEDA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUERRERO';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HIDALGO';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JIMÉNEZ';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUÁREZ';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAMADRID';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MATAMOROS';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MONCLOVA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MORELOS';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MÚZQUIZ';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NADADORES';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAVA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCAMPO';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PARRAS';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PIEDRAS NEGRAS';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PROGRESO';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RAMOS ARIZPE';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SABINAS';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SACRAMENTO';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SALTILLO';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BUENAVENTURA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN DE SABINAS';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SIERRA MOJADA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TORREÓN';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VIESCA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA UNIÓN';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZARAGOZA';
$mun->clave_entidad=5 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',5 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARMERÍA';
$mun->clave_entidad=6 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',6 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COLIMA';
$mun->clave_entidad=6 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',6 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COMALA';
$mun->clave_entidad=6 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',6 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COQUIMATLÁN';
$mun->clave_entidad=6 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',6 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUHTÉMOC';
$mun->clave_entidad=6 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',6 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTLAHUACÁN';
$mun->clave_entidad=6 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',6 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MANZANILLO';
$mun->clave_entidad=6 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',6 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MINATITLÁN';
$mun->clave_entidad=6 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',6 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECOMÁN';
$mun->clave_entidad=6 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',6 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE ÁLVAREZ';
$mun->clave_entidad=6 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',6 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACACOYAGUA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACALA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACAPETAHUA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALTAMIRANO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMATÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMATENANGO DE LA FRONTERA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMATENANGO DEL VALLE';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ANGEL ALBINO CORZO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARRIAGA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BEJUCAL DE OCAMPO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BELLA VISTA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BERRIOZÁBAL';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BOCHIL';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL BOSQUE';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CACAHOATÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CATAZAJÁ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CINTALAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COAPILLA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COMITÁN DE DOMÍNGUEZ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA CONCORDIA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COPAINALÁ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHALCHIHUITÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAMULA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHANAL';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAPULTENANGO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHENALHÓ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIAPA DE CORZO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIAPILLA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICOASÉN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICOMUSELO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHILÓN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ESCUINTLA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FRANCISCO LEÓN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FRONTERA COMALAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FRONTERA HIDALGO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA GRANDEZA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEHUETÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUIXTÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUITIUPÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUIXTLA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA INDEPENDENCIA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXHUATÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTACOMITÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTAPANGAJOYA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JIQUIPILAS';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JITOTOL';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUÁREZ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LARRÁINZAR';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA LIBERTAD';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAPASTEPEC';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAS MARGARITAS';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAZAPA DE MADERO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAZATÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='METAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MITONTIC';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOTOZINTLA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NICOLÁS RUÍZ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCOSINGO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCOTEPEC';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCOZOCOAUTLA DE ESPINOSA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OSTUACÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OSUMACINTA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OXCHUC';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PALENQUE';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PANTELHÓ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PANTEPEC';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PICHUCALCO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PIJIJIAPAN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL PORVENIR';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA COMALTITLÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUEBLO NUEVO SOLISTAHUACÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RAYÓN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='REFORMA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAS ROSAS';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SABANILLA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SALTO DE AGUA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN CRISTÓBAL DE LAS CASAS';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FERNANDO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SILTEPEC';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SIMOJOVEL';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SITALÁ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOCOLTENANGO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOLOSUCHIAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOYALÓ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SUCHIAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SUCHIATE';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SUNUAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAPACHULA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAPALAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAPILULA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECPATÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENEJAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOPISCA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TILA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TONALÁ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOTOLAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA TRINITARIA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUMBALÁ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUXTLA GUTIÉRREZ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUXTLA CHICO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUZANTÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TZIMOL';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='UNIÓN JUÁREZ';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VENUSTIANO CARRANZA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA CORZO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLAFLORES';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YAJALÓN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUCAS';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZINACANTÁN';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN CANCUC';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALDAMA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BENEMÉRITO DE LAS AMÉRICAS';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MARAVILLA TENEJAPA';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MARQUÉS DE COMILLAS';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MONTECRISTO DE GUERRERO';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS DURAZNAL';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO EL PINAR';
$mun->clave_entidad=7 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',7 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AHUMADA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALDAMA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALLENDE';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AQUILES SERDÁN';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ASCENSIÓN';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BACHÍNIVA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BALLEZA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BATOPILAS';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BOCOYNA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BUENAVENTURA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAMARGO';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CARICHÍ';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CASAS GRANDES';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CORONADO';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COYAME DEL SOTOL';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA CRUZ';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUHTÉMOC';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUSIHUIRIACHI';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIHUAHUA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHÍNIPAS';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DELICIAS';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DR. BELISARIO DOMÍNGUEZ';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GALEANA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ISABEL';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GÓMEZ FARÍAS';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GRAN MORELOS';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUACHOCHI';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALUPE';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALUPE Y CALVO';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUAZAPARES';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUERRERO';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HIDALGO DEL PARRAL';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEJOTITÁN';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IGNACIO ZARAGOZA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JANOS';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JIMÉNEZ';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUÁREZ';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JULIMES';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LÓPEZ';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MADERA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGUARICHI';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MANUEL BENAVIDES';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MATACHÍ';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MATAMOROS';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MEOQUI';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MORELOS';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MORIS';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAMIQUIPA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NONOAVA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NUEVO CASAS GRANDES';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCAMPO';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OJINAGA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PRAXEDIS G. GUERRERO';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RIVA PALACIO';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ROSALES';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ROSARIO';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO DE BORJA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO DE CONCHOS';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO DEL ORO';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA BÁRBARA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SATEVÓ';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAUCILLO';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMÓSACHIC';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL TULE';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='URIQUE';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='URUACHI';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALLE DE ZARAGOZA';
$mun->clave_entidad=8 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',8 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AZCAPOTZALCO';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COYOACÁN';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAJIMALPA DE MORELOS';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUSTAVO A. MADERO';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IZTACALCO';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IZTAPALAPA';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA MAGDALENA CONTRERAS';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MILPA ALTA';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ÁLVARO OBREGÓN';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLÁHUAC';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALPAN';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCHIMILCO';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BENITO JUÁREZ';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUHTÉMOC';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIGUEL HIDALGO';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VENUSTIANO CARRANZA';
$mun->clave_entidad=9 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',9 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CANATLÁN';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CANELAS';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CONETO DE COMONFORT';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUENCAMÉ';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DURANGO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL SIMÓN BOLÍVAR';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GÓMEZ PALACIO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALUPE VICTORIA';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUANACEVÍ';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HIDALGO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='INDÉ';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LERDO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAPIMÍ';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MEZQUITAL';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAZAS';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NOMBRE DE DIOS';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCAMPO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL ORO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OTÁEZ';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PÁNUCO DE CORONADO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PEÑÓN BLANCO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='POANAS';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUEBLO NUEVO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RODEO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BERNARDO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN DIMAS';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN DE GUADALUPE';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN DEL RÍO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUIS DEL CORDERO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO DEL GALLO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CLARA';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO PAPASQUIARO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SÚCHIL';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMAZULA';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEHUANES';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAHUALILO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOPIA';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VICENTE GUERRERO';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NUEVO IDEAL';
$mun->clave_entidad=10 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',10 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ABASOLO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACÁMBARO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL DE ALLENDE';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APASEO EL ALTO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APASEO EL GRANDE';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATARJEA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CELAYA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MANUEL DOBLADO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COMONFORT';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CORONEO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CORTAZAR';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUERÁMARO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DOCTOR MORA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DOLORES HIDALGO CUNA DE LA INDEPENDENCIA NACIONAL';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUANAJUATO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUANÍMARO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IRAPUATO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JARAL DEL PROGRESO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JERÉCUARO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LEÓN';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOROLEÓN';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCAMPO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PÉNJAMO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUEBLO NUEVO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PURÍSIMA DEL RINCÓN';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ROMITA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SALAMANCA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SALVATIERRA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN DIEGO DE LA UNIÓN';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FELIPE';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO DEL RINCÓN';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ ITURBIDE';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUIS DE LA PAZ';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ DE JUVENTINO ROSAS';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO MARAVATÍO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SILAO DE LA VICTORIA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TARANDACUAO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TARIMORO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIERRA BLANCA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='URIANGATO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALLE DE SANTIAGO';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VICTORIA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLAGRÁN';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XICHÚ';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YURIRIA';
$mun->clave_entidad=11 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',11 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACAPULCO DE JUÁREZ';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AHUACUOTZINGO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AJUCHITLÁN DEL PROGRESO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALCOZAUCA DE GUERRERO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALPOYECA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APAXTLA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARCELIA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATENANGO DEL RÍO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLAMAJALCINGO DEL MONTE';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLIXTAC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATOYAC DE ÁLVAREZ';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AYUTLA DE LOS LIBRES';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AZOYÚ';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BENITO JUÁREZ';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BUENAVISTA DE CUÉLLAR';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COAHUAYUTLA DE JOSÉ MARÍA IZAZAGA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COCULA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COPALA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COPALILLO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COPANATOYAC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COYUCA DE BENÍTEZ';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COYUCA DE CATALÁN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAJINICUILAPA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUALÁC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUTEPEC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUETZALA DEL PROGRESO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUTZAMALA DE PINZÓN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHILAPA DE ÁLVAREZ';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHILPANCINGO DE LOS BRAVO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FLORENCIO VILLARREAL';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL CANUTO A. NERI';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL HELIODORO CASTILLO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUAMUXTITLÁN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUITZUCO DE LOS FIGUEROA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IGUALA DE LA INDEPENDENCIA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IGUALAPA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXCATEOPAN DE CUAUHTÉMOC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZIHUATANEJO DE AZUETA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUAN R. ESCUDERO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LEONARDO BRAVO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MALINALTEPEC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MÁRTIR DE CUILAPAN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='METLATÓNOC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOCHITLÁN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OLINALÁ';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OMETEPEC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PEDRO ASCENCIO ALQUISIRAS';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PETATLÁN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PILCAYA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUNGARABATO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='QUECHULTENANGO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUIS ACATLÁN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARCOS';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL TOTOLAPAN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAXCO DE ALARCÓN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECOANAPA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TÉCPAN DE GALEANA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TELOLOAPAN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPECOACUILCO DE TRUJANO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TETIPAC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIXTLA DE GUERRERO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACOACHISTLAHUACA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACOAPA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALCHAPA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALIXTAQUILLA DE MALDONADO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAPA DE COMONFORT';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAPEHUALA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA UNIÓN DE ISIDORO MONTES DE OCA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XALPATLÁHUAC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCHIHUEHUETLÁN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCHISTLAHUACA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTITLÁN TABLAS';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZIRÁNDARO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZITLALA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EDUARDO NERI';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACATEPEC';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MARQUELIA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COCHOAPA EL GRANDE';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JOSÉ JOAQUÍN DE HERRERA';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUCHITÁN';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ILIATENCO';
$mun->clave_entidad=12 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',12 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACATLÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACAXOCHITLÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACTOPAN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AGUA BLANCA DE ITURBIDE';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AJACUBA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALFAJAYUCAN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALMOLOYA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APAN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL ARENAL';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATITALAQUIA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLAPEXCO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATOTONILCO EL GRANDE';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATOTONILCO DE TULA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALNALI';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CARDONAL';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUTEPEC DE HINOJOSA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAPANTONGO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAPULHUACÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHILCUAUTLA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ELOXOCHITLÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EMILIANO ZAPATA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EPAZOYUCAN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FRANCISCO I. MADERO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUASCA DE OCAMPO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUAUTLA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUAZALINGO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEHUETLA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEJUTLA DE REYES';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUICHAPAN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXMIQUILPAN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JACALA DE LEDEZMA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALTOCÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUÁREZ HIDALGO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LOLOTLA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='METEPEC';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN AGUSTÍN METZQUITITLÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='METZTITLÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MINERAL DEL CHICO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MINERAL DEL MONTE';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA MISIÓN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIXQUIAHUALA DE JUÁREZ';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOLANGO DE ESCAMILLA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NICOLÁS FLORES';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NOPALA DE VILLAGRÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OMITLÁN DE JUÁREZ';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FELIPE ORIZATLÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PACULA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PACHUCA DE SOTO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PISAFLORES';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PROGRESO DE OBREGÓN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MINERAL DE LA REFORMA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN AGUSTÍN TLAXIACA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BARTOLO TUTOTEPEC';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SALVADOR';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO DE ANAYA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TULANTEPEC DE LUGO GUERRERO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SINGUILUCAN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TASQUILLO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECOZAUTLA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENANGO DE DORIA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEAPULCO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEHUACÁN DE GUERRERO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEJI DEL RÍO DE OCAMPO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPETITLÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TETEPANGO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE TEZONTEPEC';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEZONTEPEC DE ALDAMA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIANGUISTENGO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIZAYUCA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAHUELILPAN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAHUILTEPA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLANALAPA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLANCHINOL';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAXCOAPAN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOLCAYUCA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TULA DE ALLENDE';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TULANCINGO DE BRAVO';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCHIATIPAN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCHICOATLÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YAHUALICA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACUALTIPÁN DE ÁNGELES';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTLÁN DE JUÁREZ';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZEMPOALA';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZIMAPÁN';
$mun->clave_entidad=13 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',13 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACATIC';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACATLÁN DE JUÁREZ';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AHUALULCO DE MERCADO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMACUECA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMATITÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMECA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUANITO DE ESCOBEDO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARANDAS';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL ARENAL';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATEMAJAC DE BRIZUELA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATENGO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATENGUILLO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATOTONILCO EL ALTO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATOYAC';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AUTLÁN DE NAVARRO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AYOTLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AYUTLA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA BARCA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BOLAÑOS';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CABO CORRIENTES';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CASIMIRO CASTILLO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CIHUATLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTLÁN EL GRANDE';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COCULA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COLOTLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CONCEPCIÓN DE BUENOS AIRES';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUTITLÁN DE GARCÍA BARRAGÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUTLA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUQUÍO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAPALA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIMALTITÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIQUILISTLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DEGOLLADO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EJUTLA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ENCARNACIÓN DE DÍAZ';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ETZATLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL GRULLO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUACHINANGO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALAJARA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HOSTOTIPAQUILLO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEJÚCAR';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEJUQUILLA EL ALTO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA HUERTA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTLAHUACÁN DE LOS MEMBRILLOS';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTLAHUACÁN DEL RÍO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALOSTOTITLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JAMAY';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JESÚS MARÍA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JILOTLÁN DE LOS DOLORES';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JOCOTEPEC';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUANACATLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUCHITLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAGOS DE MORENO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL LIMÓN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA DEL ORO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA MANZANILLA DE LA PAZ';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MASCOTA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAZAMITLA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MEXTICACÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MEZQUITIC';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIXTLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCOTLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OJUELOS DE JALISCO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PIHUAMO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PONCITLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUERTO VALLARTA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA PURIFICACIÓN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='QUITUPAN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL SALTO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN CRISTÓBAL DE LA BARRANCA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN DIEGO DE ALEJANDRÍA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN DE LOS LAGOS';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JULIÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARCOS';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN DE BOLAÑOS';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN HIDALGO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL EL ALTO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GÓMEZ FARÍAS';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SEBASTIÁN DEL OESTE';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA DE LOS ÁNGELES';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAYULA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TALA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TALPA DE ALLENDE';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMAZULA DE GORDIANO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAPALPA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECALITLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECOLOTLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECHALUTA DE MONTENEGRO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENAMAXTLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOCALTICHE';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOCUITATLÁN DE CORONA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPATITLÁN DE MORELOS';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEQUILA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEUCHITLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIZAPÁN EL ALTO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAJOMULCO DE ZÚÑIGA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO TLAQUEPAQUE';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOLIMÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOMATLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TONALÁ';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TONAYA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TONILA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOTATICHE';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOTOTLÁN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUXCACUESCO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUXCUECA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUXPAN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='UNIÓN DE SAN ANTONIO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='UNIÓN DE TULA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALLE DE GUADALUPE';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALLE DE JUÁREZ';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN GABRIEL';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA CORONA';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA GUERRERO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA HIDALGO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAÑADAS DE OBREGÓN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YAHUALICA DE GONZÁLEZ GALLO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACOALCO DE TORRES';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOPAN';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTILTIC';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTITLÁN DE VADILLO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTLÁN DEL REY';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTLANEJO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN IGNACIO CERRO GORDO';
$mun->clave_entidad=14 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',14 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACAMBAY DE RUÍZ CASTAÑEDA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACOLMAN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACULCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALMOLOYA DE ALQUISIRAS';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALMOLOYA DE JUÁREZ';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALMOLOYA DEL RÍO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMANALCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMATEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMECAMECA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APAXCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATENCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATIZAPÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATIZAPÁN DE ZARAGOZA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLACOMULCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLAUTLA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AXAPUSCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AYAPANGO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALIMAYA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAPULHUAC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COACALCO DE BERRIOZÁBAL';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COATEPEC HARINAS';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COCOTITLÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COYOTEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUTITLÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHALCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAPA DE MOTA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAPULTEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIAUTLA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICOLOAPAN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICONCUAC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIMALHUACÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DONATO GUERRA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ECATEPEC DE MORELOS';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ECATZINGO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEHUETOCA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEYPOXTLA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUIXQUILUCAN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ISIDRO FABELA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTAPALUCA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTAPAN DE LA SAL';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTAPAN DEL ORO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTLAHUACA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XALATLACO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALTENCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JILOTEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JILOTZINGO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JIQUIPILCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JOCOTITLÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JOQUICINGO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUCHITEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LERMA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MALINALCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MELCHOR OCAMPO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='METEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MEXICALTZINGO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MORELOS';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAUCALPAN DE JUÁREZ';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NEZAHUALCÓYOTL';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NEXTLALPAN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NICOLÁS ROMERO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NOPALTEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCOYOACAC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCUILAN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL ORO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OTUMBA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OTZOLOAPAN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OTZOLOTEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OZUMBA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PAPALOTLA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA PAZ';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='POLOTITLÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RAYÓN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONIO LA ISLA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FELIPE DEL PROGRESO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN DE LAS PIRÁMIDES';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO ATENCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SIMÓN DE GUERRERO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO TOMÁS';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOYANIQUILPAN DE JUÁREZ';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SULTEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECÁMAC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEJUPILCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMAMATLA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMASCALAPA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMASCALCINGO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMASCALTEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMOAYA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENANCINGO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENANGO DEL AIRE';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENANGO DEL VALLE';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOLOYUCAN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOTIHUACÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPETLAOXTOC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPETLIXPA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPOTZOTLÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEQUIXQUIAC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEXCALTITLÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEXCALYACAC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEXCOCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEZOYUCA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIANGUISTENCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIMILPAN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALMANALCO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALNEPANTLA DE BAZ';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLATLAYA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOLUCA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TONATICO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TULTEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TULTITLÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALLE DE BRAVO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE ALLENDE';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DEL CARBÓN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA GUERRERO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA VICTORIA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XONACATLÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACAZONAPAN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACUALPAN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZINACANTEPEC';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZUMPAHUACÁN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZUMPANGO';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUTITLÁN IZCALLI';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALLE DE CHALCO SOLIDARIDAD';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LUVIANOS';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ DEL RINCÓN';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TONANITLA';
$mun->clave_entidad=15 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',15 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACUITZIO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AGUILILLA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ÁLVARO OBREGÓN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ANGAMACUTIRO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ANGANGUEO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APATZINGÁN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APORO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AQUILA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARIO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARTEAGA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BRISEÑAS';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BUENAVISTA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CARÁCUARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COAHUAYANA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COALCOMÁN DE VÁZQUEZ PALLARES';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COENEO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CONTEPEC';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COPÁNDARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COTIJA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUITZEO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHARAPAN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAVINDA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHERÁN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHILCHOTA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHINICUILA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHUCÁNDIRO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHURINTZIO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHURUMUCO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ECUANDUREO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EPITACIO HUERTA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ERONGARÍCUARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GABRIEL ZAMORA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HIDALGO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA HUACANA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUANDACAREO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUANIQUEO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUETAMO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUIRAMBA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='INDAPARAPEO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IRIMBO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTLÁN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JACONA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JIMÉNEZ';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JIQUILPAN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUÁREZ';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUNGAPEO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAGUNILLAS';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MADERO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MARAVATÍO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MARCOS CASTELLANOS';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LÁZARO CÁRDENAS';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MORELIA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MORELOS';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MÚGICA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAHUATZEN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NOCUPÉTARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NUEVO PARANGARICUTIRO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NUEVO URECHO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NUMARÁN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCAMPO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PAJACUARÁN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PANINDÍCUARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PARÁCUARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PARACHO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PÁTZCUARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PENJAMILLO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PERIBÁN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA PIEDAD';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PURÉPERO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PURUÁNDIRO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='QUERÉNDARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='QUIROGA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COJUMATLÁN DE RÉGULES';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LOS REYES';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAHUAYO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUCAS';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA MAYA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SALVADOR ESCALANTE';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SENGUIO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SUSUPUATO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TACÁMBARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANCÍTARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANGAMANDAPIO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANGANCÍCUARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANHUATO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TARETAN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TARÍMBARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPALCATEPEC';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TINGAMBATO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TINGÜINDÍN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIQUICHEO DE NICOLÁS ROMERO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALPUJAHUA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAZAZALCA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOCUMBO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUMBISCATÍO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TURICATO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUXPAN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUZANTLA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TZINTZUNTZAN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TZITZIO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='URUAPAN';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VENUSTIANO CARRANZA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLAMAR';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VISTA HERMOSA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YURÉCUARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACAPU';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAMORA';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZINÁPARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZINAPÉCUARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZIRACUARETIRO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZITÁCUARO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JOSÉ SIXTO VERDUZCO';
$mun->clave_entidad=16 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',16 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMACUZAC';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLATLAHUCAN';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AXOCHIAPAN';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AYALA';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COATLÁN DEL RÍO';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUTLA';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUERNAVACA';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EMILIANO ZAPATA';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUITZILAC';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JANTETELCO';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JIUTEPEC';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JOJUTLA';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JONACATEPEC DE LEANDRO VALLE';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAZATEPEC';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIACATLÁN';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCUITUCO';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUENTE DE IXTLA';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMIXCO';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPALCINGO';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPOZTLÁN';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TETECALA';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TETELA DEL VOLCÁN';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALNEPANTLA';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALTIZAPÁN DE ZAPATA';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAQUILTENANGO';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAYACAPAN';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOTOLAPAN';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCHITEPEC';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YAUTEPEC';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YECAPIXTLA';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACATEPEC';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACUALPAN DE AMILPAS';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMOAC';
$mun->clave_entidad=17 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',17 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACAPONETA';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AHUACATLÁN';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMATLÁN DE CAÑAS';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COMPOSTELA';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUAJICORI';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTLÁN DEL RÍO';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALA';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XALISCO';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DEL NAYAR';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ROSAMORADA';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RUÍZ';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BLAS';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO LAGUNILLAS';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA DEL ORO';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO IXCUINTLA';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECUALA';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPIC';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUXPAN';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA YESCA';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BAHÍA DE BANDERAS';
$mun->clave_entidad=18 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',18 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ABASOLO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AGUALEGUAS';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LOS ALDAMAS';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALLENDE';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ANÁHUAC';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APODACA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARAMBERRI';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BUSTAMANTE';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CADEREYTA JIMÉNEZ';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL CARMEN';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CERRALVO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CIÉNEGA DE FLORES';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHINA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DOCTOR ARROYO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DOCTOR COSS';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DOCTOR GONZÁLEZ';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GALEANA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GARCÍA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO GARZA GARCÍA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL BRAVO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL ESCOBEDO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL TERÁN';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL TREVIÑO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL ZARAGOZA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL ZUAZUA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALUPE';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LOS HERRERAS';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HIGUERAS';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUALAHUISES';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ITURBIDE';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUÁREZ';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAMPAZOS DE NARANJO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LINARES';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MARÍN';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MELCHOR OCAMPO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIER Y NORIEGA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MINA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MONTEMORELOS';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MONTERREY';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PARÁS';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PESQUERÍA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LOS RAMONES';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RAYONES';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SABINAS HIDALGO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SALINAS VICTORIA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN NICOLÁS DE LOS GARZA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HIDALGO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALLECILLO';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLALDAMA';
$mun->clave_entidad=19 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',19 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ABEJONES';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACATLÁN DE PÉREZ FIGUEROA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ASUNCIÓN CACALOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ASUNCIÓN CUYOTEPEJI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ASUNCIÓN IXTALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ASUNCIÓN NOCHIXTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ASUNCIÓN OCOTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ASUNCIÓN TLACOLULITA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AYOTZINTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL BARRIO DE LA SOLEDAD';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALIHUALÁ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CANDELARIA LOXICHA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CIÉNEGA DE ZIMATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CIUDAD IXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COATECAS ALTAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COICOYÁN DE LAS FLORES';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA COMPAÑÍA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CONCEPCIÓN BUENAVISTA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CONCEPCIÓN PÁPALO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CONSTANCIA DEL ROSARIO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COSOLAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COSOLTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUILÁPAM DE GUERRERO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUYAMECALCO VILLA DE ZARAGOZA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAHUITES';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHALCATONGO DE HIDALGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIQUIHUITLÁN DE BENITO JUÁREZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HEROICA CIUDAD DE EJUTLA DE CRESPO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ELOXOCHITLÁN DE FLORES MAGÓN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL ESPINAL';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMAZULÁPAM DEL ESPÍRITU SANTO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FRESNILLO DE TRUJANO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALUPE ETLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALUPE DE RAMÍREZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUELATAO DE JUÁREZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUEVEA DE HUMBOLDT';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MESONES HIDALGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA HIDALGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HEROICA CIUDAD DE HUAJUAPAN DE LEÓN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUAUTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUAUTLA DE JIMÉNEZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTLÁN DE JUÁREZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HEROICA CIUDAD DE JUCHITÁN DE ZARAGOZA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LOMA BONITA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA APASCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA JALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MAGDALENA JICOTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA MIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA OCOTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA PEÑASCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA TEITIPAC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA TEQUISISTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA TLACOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA ZAHUATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MARISCALA DE JUÁREZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MÁRTIRES DE TACUBAYA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MATÍAS ROMERO AVENDAÑO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAZATLÁN VILLA DE FLORES';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIAHUATLÁN DE PORFIRIO DÍAZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIXISTLÁN DE LA REFORMA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MONJAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NATIVIDAD';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAZARENO ETLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NEJAPA DE MADERO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXPANTEPEC NIEVES';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO NILTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OAXACA DE JUÁREZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCOTLÁN DE MORELOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA PE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PINOTEPA DE DON LUIS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PLUMA HIDALGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ DEL PROGRESO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUTLA VILLA DE GUERRERO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA QUIOQUITANI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='REFORMA DE PINEDA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA REFORMA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='REYES ETLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ROJAS DE CUAUHTÉMOC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SALINA CRUZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN AGUSTÍN AMATENGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN AGUSTÍN ATENANGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN AGUSTÍN CHAYUCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN AGUSTÍN DE LAS JUNTAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN AGUSTÍN ETLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN AGUSTÍN LOXICHA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN AGUSTÍN TLACOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN AGUSTÍN YATARENI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS CABECERA NUEVA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS DINICUITI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS HUAXPALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS HUAYÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS IXTLAHUACA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS LAGUNAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS NUXIÑO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS PAXTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS SINAXTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS SOLAGA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS TEOTILÁLPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS TEPETLAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS YAÁ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS ZABACHE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS ZAUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONINO CASTILLO VELASCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONINO EL ALTO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONINO MONTE VERDE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONIO ACUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONIO DE LA CAL';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONIO HUITEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONIO NANAHUATÍPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONIO SINICAHUA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONIO TEPETLAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BALTAZAR CHICHICÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BALTAZAR LOXICHA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BALTAZAR YATZACHI EL BAJO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BARTOLO COYOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BARTOLOMÉ AYAUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BARTOLOMÉ LOXICHA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BARTOLOMÉ QUIALANA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BARTOLOMÉ YUCUAÑE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BARTOLOMÉ ZOOGOCHO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BARTOLO SOYALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BARTOLO YAUTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BERNARDO MIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN BLAS ATEMPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN CARLOS YAUTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN CRISTÓBAL AMATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN CRISTÓBAL AMOLTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN CRISTÓBAL LACHIRIOAG';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN CRISTÓBAL SUCHIXTLAHUACA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN DIONISIO DEL MAR';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN DIONISIO OCOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN DIONISIO OCOTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ESTEBAN ATATLAHUCA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FELIPE JALAPA DE DÍAZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FELIPE TEJALÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FELIPE USILA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO CAHUACUÁ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO CAJONOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO CHAPULAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO CHINDÚA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO DEL MAR';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO HUEHUETLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO IXHUATÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO JALTEPETONGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO LACHIGOLÓ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO LOGUECHE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO NUXAÑO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO OZOLOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO SOLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO TELIXTLAHUACA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO TEOPAN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO TLAPANCINGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN GABRIEL MIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ILDEFONSO AMATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ILDEFONSO SOLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ILDEFONSO VILLA ALTA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JACINTO AMILPAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JACINTO TLACOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JERÓNIMO COATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JERÓNIMO SILACAYOAPILLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JERÓNIMO SOSOLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JERÓNIMO TAVICHE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JERÓNIMO TECÓATL';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JORGE NUCHITA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ AYUQUILA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ CHILTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ DEL PEÑASCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ ESTANCIA GRANDE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ INDEPENDENCIA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ LACHIGUIRI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ TENANGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN ACHIUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN ATEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ÁNIMAS TRUJANO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA ATATLAHUCA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA COIXTLAHUACA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA CUICATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA GUELACHE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA JAYACATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA LO DE SOTO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA SUCHITEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA TLACOATZINTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA TLACHICHILCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA TUXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN CACAHUATEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN CIENEGUILLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN COATZÓSPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN COLORADO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN COMALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN COTZOCÓN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN CHICOMEZÚCHIL';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN CHILATECA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN DEL ESTADO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN DEL RÍO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN DIUXI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN EVANGELISTA ANALCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN GUELAVÍA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN GUICHICOVI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN IHUALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN JUQUILA MIXES';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN JUQUILA VIJANOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN LACHAO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN LACHIGALLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN LAJARCIA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN LALANA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN DE LOS CUÉS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN MAZATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN MIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN MIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN ÑUMÍ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN OZOLOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN PETLAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN QUIAHIJE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN QUIOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN SAYULTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN TABAÁ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN TAMAZOLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN TEITA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN TEITIPAC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN TEPEUXILA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN TEPOSCOLULA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN YAEÉ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN YATZONA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN YUCUITA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LORENZO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LORENZO ALBARRADAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LORENZO CACAOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LORENZO CUAUNECUILTITLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LORENZO TEXMELÚCAN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LORENZO VICTORIA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUCAS CAMOTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUCAS OJITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUCAS QUIAVINÍ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUCAS ZOQUIÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUIS AMATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARCIAL OZOLOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARCOS ARTEAGA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN DE LOS CANSECOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN HUAMELÚLPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN ITUNYOSO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN LACHILÁ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN PERAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN TILCAJETE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN TOXPALAN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN ZACATEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO CAJONOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAPULÁLPAM DE MÉNDEZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO DEL MAR';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO YOLOXOCHITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO ETLATONGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO NEJÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO PEÑASCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO PIÑAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO RÍO HONDO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO SINDIHUI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO TLAPILTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MELCHOR BETAZA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL ACHIUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL AHUEHUETITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL ALOÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL AMATITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL AMATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL COATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL CHICAHUA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL CHIMALAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL DEL PUERTO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL DEL RÍO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL EJUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL EL GRANDE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL HUAUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL MIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL PANIXTLAHUACA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL PERAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL PIEDRAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL QUETZALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL SANTA FLOR';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA SOLA DE VEGA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL SOYALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL SUCHIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA TALEA DE CASTRO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL TECOMATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL TENANGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL TEQUIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL TILQUIÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL TLACAMAMA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL TLACOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL TULANCINGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL YOTAO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN NICOLÁS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN NICOLÁS HIDALGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO COATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO CUATRO VENADOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO ETLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO HUITZO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO HUIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO MACUILTIANGUIS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO TIJALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO VILLA DE MITLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO YAGANIZA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO AMUZGOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO APÓSTOL';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO ATOYAC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO CAJONOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO COXCALTEPEC CÁNTAROS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO COMITANCILLO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO EL ALTO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO HUAMELULA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO HUILOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO IXCATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO IXTLAHUACA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO JALTEPETONGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO JICAYÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO JOCOTIPAC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO JUCHATENGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO MÁRTIR';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO MÁRTIR QUIECHAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO MÁRTIR YUCUXACO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO MIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO MIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO MOLINOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO NOPALA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO OCOPETATILLO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO OCOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO POCHUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO QUIATONI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO SOCHIÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO TAPANATEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO TAVICHE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO TEOZACOALCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO TEUTILA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO TIDAÁ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO TOPILTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO TOTOLÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE TUTUTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO YANERI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO YÓLOX';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO Y SAN PABLO AYUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE ETLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO Y SAN PABLO TEPOSCOLULA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO Y SAN PABLO TEQUIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO YUCUNAMA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN RAYMUNDO JALPAN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SEBASTIÁN ABASOLO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SEBASTIÁN COATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SEBASTIÁN IXCAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SEBASTIÁN NICANANDUTA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SEBASTIÁN RÍO HONDO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SEBASTIÁN TECOMAXTLAHUACA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SEBASTIÁN TEITIPAC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SEBASTIÁN TUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SIMÓN ALMOLONGAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SIMÓN ZAHUATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA ATEIXTLAHUACA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA CUAUHTÉMOC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA DEL VALLE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA TAVELA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA TLAPACOYAN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA YARENI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA ZEGACHE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATALINA QUIERÍ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA CUIXTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA IXTEPEJI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA JUQUILA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA LACHATAO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA LOXICHA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA MECHOACÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA MINAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA QUIANÉ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA TAYATA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA TICUÁ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA YOSONOTÚ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA ZAPOQUILA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ ACATEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ AMILPAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ DE BRAVO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ ITUNDUJIA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ MIXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ NUNDACO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ PAPALUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ TACACHE DE MINA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ TACAHUA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ TAYATA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ XITLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ XOXOCOTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ ZENZONTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA GERTRUDIS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA INÉS DEL MONTE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA INÉS YATZECHE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA LUCÍA DEL CAMINO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA LUCÍA MIAHUATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA LUCÍA MONTEVERDE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA LUCÍA OCOTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA ALOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA APAZCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA LA ASUNCIÓN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HEROICA CIUDAD DE TLAXIACO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AYOQUEZCO DE ALDAMA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA ATZOMPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA CAMOTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA COLOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA CORTIJO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA COYOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA CHACHOÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE CHILAPA DE DÍAZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA CHILCHOTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA CHIMALAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA DEL ROSARIO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA DEL TULE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA ECATEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA GUELACÉ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA GUIENAGATI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA HUATULCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA HUAZOLOTITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA IPALAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA IXCATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA JACATEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA JALAPA DEL MARQUÉS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA JALTIANGUIS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA LACHIXÍO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA MIXTEQUILLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA NATIVITAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA NDUAYACO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA OZOLOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA PÁPALO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA PEÑOLES';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA PETAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA QUIEGOLANI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA SOLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TATALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TECOMAVACA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TEMAXCALAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TEMAXCALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TEOPOXCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TEPANTLALI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TEXCATITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TLAHUITOLTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TLALIXTAC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TONAMECA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA TOTOLAPILLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA XADANI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA YALINA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA YAVESÍA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA YOLOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA YOSOYÚA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA YUCUHITI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA ZACATEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA ZANIZA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA ZOQUITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO AMOLTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO APOALA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO APÓSTOL';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO ASTATA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO ATITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO AYUQUILILLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO CACALOXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO CAMOTLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO COMALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO CHAZUMBA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO CHOÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO DEL RÍO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO HUAJOLOTITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO HUAUCLILLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO IHUITLÁN PLUMAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO IXCUINTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO IXTAYUTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO JAMILTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO JOCOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO JUXTLAHUACA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO LACHIGUIRI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO LALOPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO LAOLLAGA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO LAXOPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO LLANO GRANDE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO MATATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO MILTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO MINAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO NACALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO NEJAPILLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO NUNDICHE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO NUYOÓ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO PINOTEPA NACIONAL';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO SUCHILQUITONGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TAMAZOLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TAPEXTLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA TEJÚPAM DE LA UNIÓN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TENANGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TEPETLAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TETEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TEXCALCINGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TEXTITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TILANTONGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TILLO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TLAZOYALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO XANICA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO XIACUÍ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO YAITEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO YAVEO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO YOLOMÉCATL';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO YOSONDÚA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO YUCUYACHI';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO ZACATEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO ZOOCHILA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NUEVO ZOQUIÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO INGENIO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO ALBARRADAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO ARMENTA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO CHIHUITÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO DE MORELOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO IXCATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO NUXAÁ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO OZOLOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO PETAPA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO ROAYAGA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO TEHUANTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO TEOJOMULCO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO TEPUXTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO TLATAYÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO TOMALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO TONALÁ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO TONALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO XAGACÍA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO YANHUITLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO YODOHINO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO ZANATEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTOS REYES NOPALA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTOS REYES PÁPALO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTOS REYES TEPEJILLO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTOS REYES YUCUNÁ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO TOMÁS JALIEZA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO TOMÁS MAZALTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO TOMÁS OCOTEPEC';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO TOMÁS TAMAZULAPAN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN VICENTE COATLÁN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN VICENTE LACHIXÍO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN VICENTE NUÑÚ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SILACAYOÁPAM';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SITIO DE XITLAPEHUA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOLEDAD ETLA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE TAMAZULÁPAM DEL PROGRESO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANETZE DE ZARAGOZA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANICHE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TATALTEPEC DE VALDÉS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOCOCUILCO DE MARCOS PÉREZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOTITLÁN DE FLORES MAGÓN';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOTITLÁN DEL VALLE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOTONGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPELMEME VILLA DE MORELOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HEROICA VILLA TEZOATLÁN DE SEGURA Y LUNA CUNA DE LA INDEPENDENCIA DE OAXACA';
$mun->clave_entidad=20;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20)->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JERÓNIMO TLACOCHAHUAYA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACOLULA DE MATAMOROS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACOTEPEC PLUMAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALIXTAC DE CABRERA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOTONTEPEC VILLA DE MORELOS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TRINIDAD ZAACHILA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA TRINIDAD VISTA HERMOSA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='UNIÓN HIDALGO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALERIO TRUJANO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN BAUTISTA VALLE NACIONAL';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DÍAZ ORDAZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YAXE';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA YODOCONO DE PORFIRIO DÍAZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YOGANA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YUTANDUCHI DE GUERRERO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE ZAACHILA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATEO YUCUTINDOO';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTITLÁN LAGUNAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTITLÁN PALMAS';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA INÉS DE ZARAGOZA';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZIMATLÁN DE ÁLVAREZ';
$mun->clave_entidad=20 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',20 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACAJETE';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACATENO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACATZINGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACTEOPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AHUACATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AHUATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AHUAZOTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AHUEHUETITLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AJALPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALBINO ZERTUCHE';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALJOJUCA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALTEPEXI';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMIXTLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMOZOC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AQUIXTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATEMPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATEXCAL';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLIXCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATOYATEMPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATZALA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATZITZIHUACÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATZITZINTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AXUTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AYOTOXCO DE GUERRERO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAMOCUAUTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAXHUACAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COATEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COATZINGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COHETZALA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COHUECAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CORONANGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COXCATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COYOMEAPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COYOTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAPIAXTLA DE MADERO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUTEMPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUTINCHÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUTLANCINGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAYUCA DE ANDRADE';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUETZALAN DEL PROGRESO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUYOACO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHALCHICOMULA DE SESMA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAPULCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIAUTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIAUTZINGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICONCUAUTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICHIQUILA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIETLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIGMECATITLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIGNAHUAPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIGNAUTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHILA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHILA DE LA SAL';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HONEY';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHILCHOTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHINANTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DOMINGO ARENAS';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ELOXOCHITLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EPATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ESPERANZA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FRANCISCO Z. MENA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL FELIPE ÁNGELES';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALUPE';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALUPE VICTORIA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HERMENEGILDO GALEANA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUAQUECHULA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUATLATLAUCA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUAUCHINANGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEHUETLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEHUETLÁN EL CHICO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEJOTZINGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEYAPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEYTAMALCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEYTLALPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUITZILAN DE SERDÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUITZILTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLEQUIZAYAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXCAMILPA DE GUERRERO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXCAQUIXTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTACAMAXTITLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IZÚCAR DE MATAMOROS';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JOLALPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JONOTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JOPALA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUAN C. BONILLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUAN GALINDO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUAN N. MÉNDEZ';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAFRAGUA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LIBRES';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA MAGDALENA TLATLAUQUITEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAZAPILTEPEC DE JUÁREZ';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIXTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOLCAXAC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAÑADA MORELOS';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAUPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAUZONTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NEALTICAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NICOLÁS BRAVO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NOPALUCAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCOTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCOYUCAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OLINTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ORIENTAL';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PAHUATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PALMAR DE BRAVO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PANTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PETLALCINGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PIAXTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUEBLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='QUECHOLAC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='QUIMIXTLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RAFAEL LARA GRAJALES';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LOS REYES DE JUÁREZ';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS CHOLULA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONIO CAÑADA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN DIEGO LA MESA TOCHIMILTZINGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FELIPE TEOTLALCINGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FELIPE TEPATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN GABRIEL CHILAC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN GREGORIO ATZOMPA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JERÓNIMO TECUANIPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JERÓNIMO XAYACATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ CHIAPA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ MIAHUATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN ATENCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN ATZOMPA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN TEXMELUCAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN TOTOLTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MATÍAS TLALANCALECA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL IXITLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL XOXTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN NICOLÁS BUENOS AIRES';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN NICOLÁS DE LOS RANCHOS';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO ANICANO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO CHOLULA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO YELOIXTLAHUACA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SALVADOR EL SECO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SALVADOR EL VERDE';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SALVADOR HUIXCOLOTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN SEBASTIÁN TLACOTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA TLALTEMPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA INÉS AHUATEMPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ISABEL CHOLULA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO MIAHUATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEHUETLÁN EL GRANDE';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO TOMÁS HUEYOTLIPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOLTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECALI DE HERRERA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECAMACHALCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECOMATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEHUACÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEHUITZINGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENAMPULCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOPANTLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOTLALCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPANCO DE LÓPEZ';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPANGO DE RODRÍGUEZ';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPATLAXCO DE HIDALGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEACA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEMAXALCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEOJUMA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPETZINTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEXCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEXI DE RODRÍGUEZ';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEYAHUALCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEYAHUALCO DE CUAUHTÉMOC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TETELA DE OCAMPO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TETELES DE AVILA CASTILLO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEZIUTLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIANGUISMANALCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TILAPA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACOTEPEC DE BENITO JUÁREZ';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACUILOTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACHICHUCA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAHUAPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALTENANGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLANEPANTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAOLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAPACOYA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAPANALÁ';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLATLAUQUITEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAXCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOCHIMILCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOCHTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOTOLTEPEC DE GUERRERO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TULCINGO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUZAMAPAN DE GALEANA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TZICATLACOYAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VENUSTIANO CARRANZA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VICENTE GUERRERO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XAYACATLÁN DE BRAVO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XICOTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XICOTLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XIUTETELCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCHIAPULCO';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCHILTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCHITLÁN DE VICENTE SUÁREZ';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCHITLÁN TODOS SANTOS';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YAONÁHUAC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YEHUALTEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACAPALA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACAPOAXTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACATLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTITLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAPOTITLÁN DE MÉNDEZ';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZARAGOZA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZAUTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZIHUATEUTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZINACATEPEC';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZONGOZOTLA';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZOQUIAPAN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZOQUITLÁN';
$mun->clave_entidad=21 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',21 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMEALCO DE BONFIL';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PINAL DE AMOLES';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARROYO SECO';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CADEREYTA DE MONTES';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COLÓN';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CORREGIDORA';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EZEQUIEL MONTES';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUIMILPAN';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALPAN DE SERRA';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LANDA DE MATAMOROS';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL MARQUÉS';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PEDRO ESCOBEDO';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PEÑAMILLER';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='QUERÉTARO';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOAQUÍN';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN DEL RÍO';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEQUISQUIAPAN';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOLIMÁN';
$mun->clave_entidad=22 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',22 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COZUMEL';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FELIPE CARRILLO PUERTO';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ISLA MUJERES';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OTHÓN P. BLANCO';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BENITO JUÁREZ';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JOSÉ MARÍA MORELOS';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LÁZARO CÁRDENAS';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOLIDARIDAD';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TULUM';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BACALAR';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUERTO MORELOS';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NO ESPECIFICADO';
$mun->clave_entidad=23 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',23 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AHUALULCO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALAQUINES';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AQUISMÓN';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARMADILLO DE LOS INFANTE';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CÁRDENAS';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CATORCE';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CEDRAL';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CERRITOS';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CERRO DE SAN PEDRO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CIUDAD DEL MAÍZ';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CIUDAD FERNÁNDEZ';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANCANHUITZ';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CIUDAD VALLES';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COXCATLÁN';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHARCAS';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EBANO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALCÁZAR';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEHUETLÁN';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAGUNILLAS';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MATEHUALA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MEXQUITIC DE CARMONA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOCTEZUMA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RAYÓN';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RIOVERDE';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SALINAS';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANTONIO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN CIRO DE ACOSTA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUIS POTOSÍ';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MARTÍN CHALCHICUAUTLA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN NICOLÁS TOLENTINO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA DEL RÍO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTO DOMINGO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN VICENTE TANCUAYALAB';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOLEDAD DE GRACIANO SÁNCHEZ';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMASOPO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMAZUNCHALE';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMPACÁN';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMPAMOLÓN CORONA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMUÍN';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANLAJÁS';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANQUIÁN DE ESCOBEDO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIERRA NUEVA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VANEGAS';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VENADO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE ARRIAGA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE GUADALUPE';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE LA PAZ';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE RAMOS';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE REYES';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA HIDALGO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA JUÁREZ';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AXTLA DE TERRAZAS';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XILITLA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZARAGOZA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE ARISTA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MATLAPA';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL NARANJO';
$mun->clave_entidad=24 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',24 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AHOME';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ANGOSTURA';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BADIRAGUATO';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CONCORDIA';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COSALÁ';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CULIACÁN';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHOIX';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ELOTA';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ESCUINAPA';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL FUERTE';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUASAVE';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAZATLÁN';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOCORITO';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ROSARIO';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SALVADOR ALVARADO';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN IGNACIO';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SINALOA';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAVOLATO';
$mun->clave_entidad=25 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',25 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACONCHI';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AGUA PRIETA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALAMOS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALTAR';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARIVECHI';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ARIZPE';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATIL';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BACADÉHUACHI';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BACANORA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BACERAC';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BACOACHI';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BÁCUM';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BANÁMICHI';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BAVIÁCORA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BAVISPE';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BENJAMÍN HILL';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CABORCA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAJEME';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CANANEA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CARBÓ';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA COLORADA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUCURPE';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUMPAS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DIVISADEROS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EMPALME';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ETCHOJOA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FRONTERAS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GRANADOS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUAYMAS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HERMOSILLO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUACHINERA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUÁSABAS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUATABAMPO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUÉPAC';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IMURIS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAZATÁN';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOCTEZUMA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NACO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NÁCORI CHICO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NACOZARI DE GARCÍA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAVOJOA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NOGALES';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ONAVAS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OPODEPE';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OQUITOA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PITIQUITO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUERTO PEÑASCO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='QUIRIEGO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RAYÓN';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ROSARIO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAHUARIPA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FELIPE DE JESÚS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JAVIER';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUIS RÍO COLORADO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN MIGUEL DE HORCASITAS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PEDRO DE LA CUEVA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SÁRIC';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOYOPA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SUAQUI GRANDE';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPACHE';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TRINCHERAS';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUBUTAMA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='URES';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA HIDALGO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA PESQUEIRA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YÉCORA';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL PLUTARCO ELÍAS CALLES';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BENITO JUÁREZ';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN IGNACIO RÍO MUERTO';
$mun->clave_entidad=26 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',26 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BALANCÁN';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CÁRDENAS';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CENTLA';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CENTRO';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COMALCALCO';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUNDUACÁN';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EMILIANO ZAPATA';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUIMANGUILLO';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALAPA';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALPA DE MÉNDEZ';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JONUTA';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MACUSPANA';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NACAJUCA';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PARAÍSO';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TACOTALPA';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEAPA';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENOSIQUE';
$mun->clave_entidad=27 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',27 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ABASOLO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALDAMA';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALTAMIRA';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ANTIGUO MORELOS';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BURGOS';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BUSTAMANTE';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAMARGO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CASAS';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CIUDAD MADERO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CRUILLAS';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GÓMEZ FARÍAS';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GONZÁLEZ';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GÜÉMEZ';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUERRERO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUSTAVO DÍAZ ORDAZ';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HIDALGO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JAUMAVE';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JIMÉNEZ';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LLERA';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAINERO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL MANTE';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MATAMOROS';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MÉNDEZ';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIER';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIGUEL ALEMÁN';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIQUIHUANA';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NUEVO LAREDO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NUEVO MORELOS';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OCAMPO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PADILLA';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PALMILLAS';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='REYNOSA';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RÍO BRAVO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN CARLOS';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FERNANDO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN NICOLÁS';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOTO LA MARINA';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMPICO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TULA';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALLE HERMOSO';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VICTORIA';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLAGRÁN';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XICOTÉNCATL';
$mun->clave_entidad=28 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',28 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMAXAC DE GUERRERO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APETATITLÁN DE ANTONIO CARVAJAL';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLANGATEPEC';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLTZAYANCA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APIZACO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALPULALPAN';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL CARMEN TEQUEXQUITLA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAPIAXTLA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAXOMULCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIAUTEMPAN';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MUÑOZ DE DOMINGO ARENAS';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ESPAÑITA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUAMANTLA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEYOTLIPAN';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTACUIXTLA DE MARIANO MATAMOROS';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTENCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAZATECOCHCO DE JOSÉ MARÍA MORELOS';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CONTLA DE JUAN CUAMATZI';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPETITLA DE LARDIZÁBAL';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANCTÓRUM DE LÁZARO CÁRDENAS';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NANACAMILPA DE MARIANO ARISTA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACUAMANALA DE MIGUEL HIDALGO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NATÍVITAS';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PANOTLA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN PABLO DEL MONTE';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ TLAXCALA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENANCINGO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOLOCHOLCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPEYANCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TERRENATE';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TETLA DE LA SOLIDARIDAD';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TETLATLAHUCA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAXCALA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAXCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOCATLÁN';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOTOLAC';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZILTLALTÉPEC DE TRINIDAD SÁNCHEZ SANTOS';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TZOMPANTEPEC';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XALOZTOC';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XALTOCAN';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PAPALOTLA DE XICOHTÉNCATL';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XICOHTZINCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YAUHQUEMEHCAN';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACATELCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BENITO JUÁREZ';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EMILIANO ZAPATA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LÁZARO CÁRDENAS';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA MAGDALENA TLALTELULCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN DAMIÁN TEXÓLOC';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FRANCISCO TETLANOHCAN';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JERÓNIMO ZACUALPAN';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JOSÉ TEACALCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN HUACTZINCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LORENZO AXOCOMANITLA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN LUCAS TECOPILCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ANA NOPALUCAN';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA APOLONIA TEACALCO';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CATARINA AYOMETLA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA CRUZ QUILEHTLA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ISABEL XILOXOXTLA';
$mun->clave_entidad=29 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',29 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACAJETE';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACATLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACAYUCAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACTOPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACULA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACULTZINGO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAMARÓN DE TEJEDA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALPATLÁHUAC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALTO LUCERO DE GUTIÉRREZ BARRIOS';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALTOTONGA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ALVARADO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMATITLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NARANJOS AMATLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AMATLÁN DE LOS REYES';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ANGEL R. CABADA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA ANTIGUA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APAZAPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AQUILA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ASTACINGA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATLAHUILCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATOYAC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATZACAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATZALAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALTETELA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AYAHUALULCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BANDERILLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BENITO JUÁREZ';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BOCA DEL RÍO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALCAHUALCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAMERINO Z. MENDOZA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CARRILLO PUERTO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CATEMACO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAZONES DE HERRERA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CERRO AZUL';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CITLALTÉPETL';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COACOATZINTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COAHUITLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COATEPEC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COATZACOALCOS';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COATZINTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COETZALA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COLIPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COMAPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CÓRDOBA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COSAMALOAPAN DE CARPIO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COSAUTLÁN DE CARVAJAL';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COSCOMATEPEC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COSOLEACAQUE';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COTAXTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COXQUIHUI';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='COYUTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUICHAPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUITLÁHUAC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHACALTIANGUIS';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHALMA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICONAMEL';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICONQUIACO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICONTEPEC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHINAMECA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHINAMPA DE GOROSTIZA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAS CHOAPAS';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHOCAMÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHONTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHUMATLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EMILIANO ZAPATA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ESPINAL';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FILOMENO MATA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FORTÍN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUTIÉRREZ ZAMORA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HIDALGOTITLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUATUSCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUAYACOCOTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUEYAPAN DE OCAMPO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUILOAPAN DE CUAUHTÉMOC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IGNACIO DE LA LLAVE';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ILAMATLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ISLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXCATEPEC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXHUACÁN DE LOS REYES';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXHUATLÁN DEL CAFÉ';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXHUATLANCILLO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXHUATLÁN DEL SURESTE';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXHUATLÁN DE MADERO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXMATLAHUACAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXTACZOQUITLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALACINGO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XALAPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALCOMULCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JÁLTIPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JAMAPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JESÚS CARRANZA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XICO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JILOTEPEC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUAN RODRÍGUEZ CLARA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUCHIQUE DE FERRER';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LANDERO Y COSS';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LERDO DE TEJADA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAGDALENA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MALTRATA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MANLIO FABIO ALTAMIRANO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MARIANO ESCOBEDO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MARTÍNEZ DE LA TORRE';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MECATLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MECAYAPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MEDELLÍN DE BRAVO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIAHUATLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAS MINAS';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MINATITLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MISANTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIXTLA DE ALTAMIRANO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOLOACÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAOLINCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NARANJAL';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NAUTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NOGALES';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OLUTA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OMEALCA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ORIZABA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OTATITLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OTEAPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OZULUAMA DE MASCAREÑAS';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PAJAPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PÁNUCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PAPANTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PASO DEL MACHO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PASO DE OVEJAS';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LA PERLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PEROTE';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PLATÓN SÁNCHEZ';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PLAYA VICENTE';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='POZA RICA DE HIDALGO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LAS VIGAS DE RAMÍREZ';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUEBLO VIEJO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PUENTE NACIONAL';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RAFAEL DELGADO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RAFAEL LUCIO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LOS REYES';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RÍO BLANCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SALTABARRANCA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS TENEJAPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN ANDRÉS TUXTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN JUAN EVANGELISTA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO TUXTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAYULA DE ALEMÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOCONUSCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOCHIAPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOLEDAD ATZOMPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOLEDAD DE DOBLADO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOTEAPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMALÍN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMIAHUA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAMPICO ALTO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANCOCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANTIMA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TANTOYUCA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TATATILA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CASTILLO DE TEAYO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECOLUTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEHUIPANGO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ÁLAMO TEMAPACHE';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMPOAL';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENAMPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TENOCHTITLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEOCELO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPATLAXCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPETLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPETZINTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEQUILA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JOSÉ AZUETA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEXCATEPEC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEXHUACÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEXISTEPEC';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEZONAPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIERRA BLANCA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIHUATLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACOJALPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACOLULAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACOTALPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACOTEPEC DE MEJÍA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLACHICHILCO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALIXCOYAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALNELHUAYOCAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAPACOYAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLAQUILPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLILAPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOMATLÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TONAYÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TOTUTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUXPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUXTILLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='URSULO GALVÁN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VEGA DE ALATORRE';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VERACRUZ';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA ALDAMA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOXOCOTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YANGA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YECUATLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACUALPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZARAGOZA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZENTLA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZONGOLICA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZONTECOMATLÁN DE LÓPEZ Y FUENTES';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZOZOCOLCO DE HIDALGO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AGUA DULCE';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL HIGO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NANCHITAL DE LÁZARO CÁRDENAS DEL RÍO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TRES VALLES';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CARLOS A. CARRILLO';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TATAHUICAPAN DE JUÁREZ';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='UXPANAPA';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN RAFAEL';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTIAGO SOCHIAPAN';
$mun->clave_entidad=30 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',30 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ABALÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ACANCEH';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='AKIL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BACA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BOKOBÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BUCTZOTZ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CACALCHÉN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALOTMUL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CANSAHCAB';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CANTAMAYEC';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CELESTÚN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CENOTILLO';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CONKAL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUNCUNUL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUZAMÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHACSINKÍN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHANKOM';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHAPAB';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHEMAX';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICXULUB PUEBLO';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHICHIMILÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHIKINDZONOT';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHOCHOLÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHUMAYEL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DZÁN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DZEMUL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DZIDZANTÚN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DZILAM DE BRAVO';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DZILAM GONZÁLEZ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DZITÁS';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='DZONCAUICH';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ESPITA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HALACHÓ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HOCABÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HOCTÚN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HOMÚN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUHÍ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUNUCMÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IXIL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='IZAMAL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='KANASÍN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='KANTUNIL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='KAUA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='KINCHIL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='KOPOMÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAMA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MANÍ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAXCANÚ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAYAPÁN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MÉRIDA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOCOCHÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOTUL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MUNA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MUXUPIP';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OPICHÉN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OXKUTZCAB';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PANABÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PETO';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PROGRESO';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='QUINTANA ROO';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RÍO LAGARTOS';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SACALUM';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAMAHIL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANAHCAT';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAN FELIPE';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA ELENA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SEYÉ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SINANCHÉ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOTUTA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SUCILÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SUDZAL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SUMA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAHDZIÚ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TAHMEK';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEABO';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TECOH';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEKAL DE VENEGAS';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEKANTÓ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEKAX';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEKIT';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEKOM';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TELCHAC PUEBLO';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TELCHAC PUERTO';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMAX';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEMOZÓN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPAKÁN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TETIZ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEYA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TICUL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIMUCUY';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TINUM';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIXCACALCUPUL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIXKOKOB';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIXMEHUAC';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIXPÉHUAL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TIZIMÍN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TUNKÁS';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TZUCACAB';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='UAYMA';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='UCÚ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='UMÁN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALLADOLID';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='XOCCHEL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YAXCABÁ';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YAXKUKUL';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='YOBAÍN';
$mun->clave_entidad=31 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',31 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APOZOL';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='APULCO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ATOLINGA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='BENITO JUÁREZ';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CALERA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CAÑITAS DE FELIPE PESCADOR';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CONCEPCIÓN DEL ORO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CUAUHTÉMOC';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='CHALCHIHUITES';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='FRESNILLO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TRINIDAD GARCÍA DE LA CADENA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENARO CODINA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL ENRIQUE ESTRADA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL FRANCISCO R. MURGUÍA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL PLATEADO DE JOAQUÍN AMARO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GENERAL PÁNFILO NATERA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='GUADALUPE';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='HUANUSCO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JALPA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JEREZ';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JIMÉNEZ DEL TEUL';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUAN ALDAMA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='JUCHIPILA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LORETO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='LUIS MOYA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MAZAPIL';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MELCHOR OCAMPO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MEZQUITAL DEL ORO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MIGUEL AUZA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOMAX';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MONTE ESCOBEDO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MORELOS';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='MOYAHUA DE ESTRADA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NOCHISTLÁN DE MEJÍA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='NORIA DE ÁNGELES';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='OJOCALIENTE';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PÁNUCO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='PINOS';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='RÍO GRANDE';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SAIN ALTO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='EL SALVADOR';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SOMBRERETE';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SUSTICACÁN';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TABASCO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPECHITLÁN';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEPETONGO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TEÚL DE GONZÁLEZ ORTEGA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TLALTENANGO DE SÁNCHEZ ROMÁN';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VALPARAÍSO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VETAGRANDE';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA DE COS';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA GARCÍA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA GONZÁLEZ ORTEGA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLA HIDALGO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='VILLANUEVA';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='ZACATECAS';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='TRANCOSO';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


$mun=new Municipio();
$mun->nombre_municipio='SANTA MARÍA DE LA PAZ';
$mun->clave_entidad=32 ;
$ef_id = DB::table('entidades_federativas')->where('clave_entidad',32 )->first();
$id=$ef_id->id;
$mun->entidades_federativas_id=$id;
$mun->save();


    }
}
