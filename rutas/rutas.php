<?php
//capturamos la ruta
$array=explode("/",$_SERVER["REQUEST_URI"]);

/*-------------------------------------- 
cuando no se hace ninguna peticion a la API
---------------------------------------*/ 
if(count(array_filter($array))==1){

    $json=array(
        "detalle"=>"sin solicitudes",
    );
echo json_encode($json, true); 
}else{
 /*-------------------------------------- 
 cuando si se hace una peticion a la API
 ---------------------------------------*/  
 if(count(array_filter($array))==2){

    $json=array(
        "detalle"=>"Cual es la solicitud?",
    );
echo json_encode($json, true); 
}
}
?>