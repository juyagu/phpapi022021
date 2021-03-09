<?php 

class ApiPHP {
    public function saludo(){
        return "Hola, te estoy saludando desde un SOAP";
    }

    public function sumar($n1,$n2){
        return $n1 + $n2;
    }
}


$server = new SoapServer("../service.wsdl",array('cache_wsdl' => WSDL_CACHE_NONE));
$server->setClass("ApiPHP");

$server->handle();