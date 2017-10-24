<?php

$path = "C:\Bitnami\wappstack-7.0.23-0\apache2\htdocs\itslp\Carreras.csv";

if (!file_exists($path))
    exit("File not found");

$file = fopen($path, "r");



if ($file) {
        
    echo "DB::Table('carreras')->insert([";     

    while (($line = fgets($file)) !== false) {
        $array=explode (',', $line);
        $cadena2="['nivel_escolar'=>".$array[0].",'clave_oficial'=>".$array[1].",'clave_cosnet'=>".$array[2].",'nombre_carrera'=>".$array[3].",'nombre_reducido'=>".$array[4].",'siglas'=>".$array[5].",'fecha_inicio'=>'".$array[6]."','fecha_termino'=>'".$array[7]."','creditos_totales'=>".$array[8].",'carga_maxima'=>".$array[9].",'carga_minima'=>".$array[10].",'area_academica'=>".$array[11].",'area_id'=>1],</br>";
        echo $cadena2; 
    }
    echo "]);";
    if (!feof($file)) {
        echo "Error: EOF not found\n";
    }
    fclose($file);
}

?>