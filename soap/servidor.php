<?php 

class ApiPHP {
    public function saludo(){
        return "Hola, te estoy saludando desde un SOAP";
    }
}

$server = new SoapServer("../service.wsdl");
$server->setClass("ApiPHP");

$server->handle();