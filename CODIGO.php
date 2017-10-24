<?php

$path = "C:\Bitnami\wappstack-7.0.23-0\apache2\htdocs\itslp\Carreras.csv";

if (!file_exists($path))
    exit("File not found");

$file = fopen($path, "r");



if ($file) {
        
    $cadena="DB::Table('Carreras')->insert([";     

    while (($line = fgets($file)) !== false) {



        $array=explode (',', $line);
        $cadena=$cadena."['nombre_entidad'=>".$array[1].",'abreviatura'=>".$array[2]."]</br>";

        $array=explode (',', $line);
        $cadena=$cadena."['nivel_escolar'=>".$array[0].",'clave_oficial'=>".$array[1].",'nombre_carrera'=>".$array[2].",'nombre_reducido'=>".$array[3].",'siglas'=>".$array[4].",'carga_maxima'=>".$array[5].",'carga_minima'=>".$array[6].",'fecha_inicio'=>".$array[7].",'fecha_termino'=>".$array[8].",'clave_cosnet'=>".$array[9].",'creditos_totales'=>".$array[10].",'titulo_entrega'=>".$array[11].",'clave'=>".$array[12].",'nivel'=>".$array[13].",'area_id'=>".$array[14].",'sub_area'=>".$array[15].",'nivel_d'=>".$array[16].",'consecutivo_carrera'=>".$array[17].",'creditos_1materia'=>".$array[18].",'creditos_2materias'=>".$array[19].",'creditos_3materias'=>".$array[20].",''=>".$array[21].",'creditos_1especial'=>".$array[22]."]</br>";


    }
    $cadena=$cadena."]);";
    echo $cadena;
    if (!feof($file)) {
        echo "Error: EOF not found\n";
    }
    fclose($file);
}

?>