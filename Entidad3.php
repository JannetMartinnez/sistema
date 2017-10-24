<?php

$path = "C:\Bitnami\wappstack-7.0.23-0\apache2\htdocs\itslp\EntidadFederativas.txt";

if (!file_exists($path))
    exit("File not found");

$file = fopen($path, "r");



if ($file) {
        
	$cadena="DB::Table('entidades_federativas')->insert([";		

    while (($line = fgets($file)) !== false) {


        $array=explode (',', $line);
        $cadena=$cadena."['nombre_entidad'=>'".trim($array[1])."','abreviatura'=>'".trim($array[2])."','pais_id'=>154,'clave_entidad'=>".trim($array[0])."],</br>";


    }
    $cadena=$cadena."]);";
    echo $cadena;
    if (!feof($file)) {
        echo "Error: EOF not found\n";
    }
    fclose($file);
}

?>