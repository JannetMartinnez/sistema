<?php

$path ="C:\Bitnami\wappstack-7.0.23-0\apache2\htdocs\periodos_escolares.csv";
if (!file_exists($path))
    exit("File not found!!!!");

$file = fopen($path, "r");



if ($file) {
        
	$cadena="DB::Table('periodos_escolares')->insert([";		

    while (($line = fgets($file)) !== false) {
 

        $array=explode (',', $line);
        if(trim($array[6])==null)
            $array[6]='2017-01-01';
        if(trim($array[7])==null)
            $array[7]='2017-01-01';
        if(trim($array[9])==null)
            $array[9]='2017-01-01';
        if(trim($array[10])==null)
            $array[10]='2017-01-01';
        if(trim($array[13])==null)
            $array[13]='2017-01-01';
        if(trim($array[14])==null)
            $array[14]='2017-01-01';
        if(trim($array[15])==null)
            $array[15]='2017-01-01';
        if(trim($array[16])==null)
            $array[16]='2017-01-01';
        if(trim($array[17])==null)
            $array[17]='2017-01-01';
        if(trim($array[18])==null)
            $array[18]='2017-01-01';


        $cadena=$cadena."['periodo'=>".trim($array[0]).
            ",'identificacion_larga'=>".trim($array[1]).
            ",'identificacion_corta'=>".trim($array[2]).
            ",'fecha_inicio'=>'".trim($array[4]).
            "','fecha_termino'=>'".trim($array[5]).
            "','inicio_vacacional_ss'=>'".trim($array[6]).
            "','termino_vacacional_ss'=>'".trim($array[7]).
            "','num_dias_clase'=>".trim($array[8]).
            ",'inicio_especial'=>'".trim($array[9]).
            "','fin_especial'=>'".trim($array[10]).
            "','cierre_horarios'=>'S'".
            ",'cierre_seleccion'=>'S'".
            ",'inicio_enc_estudiantil'=>'".trim($array[13]).
            "','fin_enc_estudiantil'=>'".trim($array[14]).
            "','inicio_sele_alumnos'=>'".trim($array[15]).
            "','fin_sele_alumnos'=>'".trim($array[16]).
            "','inicio_vacacional'=>'".trim($array[17]).
            "','termino_vacacional'=>'".trim($array[18]).
            "','status'=>".trim($array[3]).
        "],</br>";


    }
    $cadena=$cadena."]);";
    echo $cadena;
    if (!feof($file)) {
        echo "Error: EOF not found\n";
    }
    fclose($file);
}

?>