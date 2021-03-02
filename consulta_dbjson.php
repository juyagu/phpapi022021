<?php 
$curl = curl_init();
$url = 'http://localhost:3000/aulas';

curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);

$respuestas = curl_exec($curl);
curl_close($curl);
var_dump(json_decode($respuestas,true));

