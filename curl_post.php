<?php 

$curl = curl_init();
$url = 'http://localhost:3000/aulas';

$datos = array("capacidad" => 5);
$datosPost = json_encode($datos);

curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_POST,1);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type:application/json'));
curl_setopt($curl,CURLOPT_POSTFIELDS,$datosPost);

//CURLOPT_CUSTOMREQUEST,"PUT"

$resultado = curl_exec($curl);
curl_close($curl);

var_dump($resultado);


// $_GET $_POST $_REQUEST 
// file_get_contents("php://input")