<?php
// abriendo el archivo pais.csv
$prueba=fopen("tabla_de_prepas.csv","r") or die ("error al leer");
//recorriendo linea por linea el archivo
//inicio del scrip para poblado de base de datos
$v1= "DB::table('preparatorias_de_procedencia')->insert("."<br>";
///////////////////////////////////////////////77
while (!feof($prueba)) {
$linea = fgets($prueba);
//generacion de la estructura del insert continuacion del poblado
$bloques = explode(",",$linea);

$v1=$v1."["."'clave_preparatoria'=>"."'".$bloques[0]."'".","
           ."'nombre_preparatoria'=>"."'".$bloques[1]."'".","
           ."' entidad_federativa'=>"."'".$bloques[2]."'".","
           ."'municipio'=>"."'".$bloques[3]."'".","
           ."'colonia'=>"."'".$bloques[4]."'".","
           ."'servicio'=>"."'".$bloques[5]."'".","
           ."'sostenimiento'=>"."'".$bloques[7]."'"."],"."<br>";
//////////////////////////////////////////////////////////////////7
}//cierre del bucle while del recorrido del archivo
$v2=substr($v1,0,-46);
echo $v2.");";
fclose($prueba);
?>