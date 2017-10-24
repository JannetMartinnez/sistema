<?php

$path = "C:\Bitnami\wappstack-7.0.23-0\apache2\htdocs\itslp\MUNICIPIO2.csv";

if (!file_exists($path))
    exit("File not found");

$file = fopen($path, "r");


$cadena="";
if ($file) {
    while (($line = fgets($file)) !== false) {
        $array=explode (',', $line);
        $cad1="\$mun=new Municipio();</br>
               \$mun->nombre_municipio='$array[1]';</br>";
        $cad2="\$mun->clave_entidad=$array[2];</br>";
        $cad3="\$ef_id = DB::table('entidades_federativas')->where('clave_entidad',$array[2])->first();</br>";
        $cad4="\$id=\$ef_id->id;</br>"; 
        $cad5="\$mun->entidades_federativas_id=\$id;</br>";
        $cad6="\$mun->save();</br>";
        $cadena=$cadena.$cad1.$cad2.$cad3.$cad4.$cad5.$cad6."</br></br>";
    }
    echo $cadena;
    if (!feof($file)) {
        echo "Error: EOF not found\n";
    }
    fclose($file);
}

?>