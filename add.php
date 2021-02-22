<?php
$productos = new simpleXMLElement('archivos/productos.xml',null,true);

$producto = $productos->addChild('producto');
$producto->addAttribute('id','789');
$producto->addChild('nombre','Mermelada');
$producto->addChild('marca','BC');
$producto->addChild('precio','200');
$producto->addChild('stock','100');

echo $productos->asXML('archivos/productos_nuevo.xml');