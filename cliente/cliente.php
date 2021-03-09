<?php 
ini_set("soap_wsdl_cache_enabled","0");

$servidor = new SoapClient("http://localhost/service.wsdl");
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$respuestaSuma = $servidor->sumar($n1,$n2);
$respuestaSaludo = $servidor->saludo();

echo '<h1>El resultado de las llamadas al webservice son:</h1>';
echo '<p><strong>Sumar:</strong> '. $respuestaSuma;
echo '<p><strong>Saludar:</strong> '. $respuestaSaludo;