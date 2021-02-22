<?php 
/*$data = file_get_contents('productos.xml');
$xml = simplexml_load_string($data);
var_dump($xml);*/

/*$xml = simplexml_load_file('archivos/productos.xml');
var_dump($xml);*/

/*$data = file_get_contents('archivos/productos.xml');
$xml = new simpleXMLElement($data);
echo "Datos XML parseados";
echo '<br>';
var_dump($xml);*/


$xml = new simpleXMLElement('archivos/productos.xml',null,true);

/*foreach($xml->producto as $producto){
    echo '<h2>Producto ' . $producto->nombre . ' ' . $producto->marca.'</h2>';
    echo '<ul>';
    echo '<li>' . $producto->nombre . '</li>';
    echo '<li>' . $producto->marca . '</li>';
    echo '<li>' . $producto->precio . '</li>';
    echo '<li>' . $producto->stock . '</li>';
    echo '</ul>';
}*/

/*
for($i=0;$i<$xml->producto.length;$i++){
    $producto = $xml->producto[$i];
}
*/

foreach($xml->children() as $child){
    echo $child->getName(). '<br>';

    foreach($child->children() as $nieto){
        echo $nieto->getName(). ': ' . $nieto . '<br>';
    }

}

$producto = $xml->addChild('producto');
