﻿<?php
echo "Este arch</br>";

$path = "C:\Bitnami\wappstack-7.0.23-0\apache2\htdocs\itslp\organigrama.csv";

if (!file_exists($path))
    exit("File not found");

$file = fopen($path, "r");


$cadena="\$org=new Organigrama();";
if ($file) {
    while (($line = fgets($file)) !== false) {
        $array=explode (',', $line);
        $cad1="clave_area=$array[0],";
        $cad2="descripcion_area=$array[1],";
        $cad3="descripcion_corta=$array[2],";
        $cad4="area_depende=$array[3],";
        $cad5="nivel=$array[4],";
        $cad6="tipo_area=$array[5],";
        if($array[6]==null){
           $cad7="correo_electronico='',";
        }else
        {
           $cad7="correo_electronico=$array[6],";
        }
  
        $cad8="activo=true";


			        
			        	'clave_area'=>'999',
			        	'descripcion_area'=>'asdfasdf',
			        	'descripcion_corta'=>'isc',
			        	'area_depende'=>'000',
			        	'nivel'=>4,
			        	'tipo_area'=>'sss',
			        	'correo_electronico'=>'asdfasdf',
			        	'activo'=>true
			        ]

        echo ."[</br>".$cad1."</br>".$cad2."</br>".$cad3."</br>".$cad4."</br>".$cad5."</br>".$cad6."</br>".$cad7."</br>".$cad8."</br>\$org->save();</br></br>";
    }
   
    if (!feof($file)) {
        echo "Error: EOF no encontrado\n";
    }
    fclose($file);
}

?>
