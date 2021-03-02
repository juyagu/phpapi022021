<?php 

$datos = file_get_contents('https://jsonplaceholder.typicode.com/posts');
$datosParseados = json_decode($datos,true);
var_dump($datosParseados);
exit;