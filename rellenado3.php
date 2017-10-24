<?php
// abriendo el archivo pais.csv
$prueba=fopen("tabla_de_prepas.csv","r") or die ("error al leer");
//recorriendo linea por linea el archivo
while (!feof($prueba)) {
$linea = fgets($prueba);
//generacion de la estructura del insert continuacion del poblado
$bloques = explode(",",$linea);

//   trim sirve para quitar espacios al principio y al final de un texto
    $v1=$v1."$"."prep=new PreparatoriaProcedencia();"."<br>".
        "$"."prep->clave_preparatoria="."'".$bloques[0]."';"."<br>".
        "$"."prep->nombre_preparatoria="."trim('".$bloques[1]."');"."<br>".
        "$"."ef_id=DB::table('entidades_federativas')->where('clave_entidad',".$bloques[2].")->first();"."<br>".
        "$"."id="."$"."ef_id->id;"."<br>".
        "$"."prep->entidades_federativas_id="."$"."id;"."<br>".                   
        "$"."prep->municipio="."'".$bloques[3]."';"."<br>".
        "$"."prep->colonia="."'".$bloques[4]."';"."<br>".
        "$"."prep->servicio="."'".$bloques[5]."';"."<br>".
        "$"."prep->sostenimiento="."'".$bloques[6]."';"."<br>".
        "$"."prep->save();"."<br>";



//////////////////////////////////////////////////////////////////7
}//cierre del bucle while del recorrido del archivo
//$v2=substr($v1,0,-46);
echo $v1;
fclose($prueba);
?>