<?php 
$json = file_get_contents('productos.json');
//var_dump($json);
$productos = json_decode($json);

foreach($productos as $producto){
    $ficha = '<ul>';
    $ficha .= '<li>Nombre: ' . $producto->nombre . '</li>'; // $ficha = $ficha . <li>Nombre: ' . $producto->nombre . '</li>';
    $ficha .= '<li>Marca: ' . $producto->marca . '</li>';
    $ficha .= '<li>Precio: ' . $producto->precio . '</li>';
    $ficha .= '<li>Stock: ' . $producto->stock . '</li>'; 
    $ficha .= '<li>Presentacion: </li>';
    $ficha .= '<ol>';
    $ficha .= '<li>Chica: '. $producto->presentacion->chica . '</li>'; 
    $ficha .= '<li>Mediana: '. $producto->presentacion->mediana . '</li>';
    $ficha .= '<li>Grande: '. $producto->presentacion->grande . '</li>';
    $ficha .= '</ol>';
    $ficha .= '</ul>';

    echo $ficha;
}

echo '<hr />';

$productos = json_decode($json,true);
foreach($productos as $producto){
    $ficha = '<ul>';
    $ficha .= '<li>Nombre: ' . $producto['nombre'] . '</li>'; // $ficha = $ficha . <li>Nombre: ' . $producto->nombre . '</li>';
    $ficha .= '<li>Marca: ' . $producto['marca'] . '</li>';
    $ficha .= '<li>Precio: ' . $producto['precio'] . '</li>';
    $ficha .= '<li>Stock: ' . $producto['stock'] . '</li>'; 
    $ficha .= '<li>Presentacion: </li>';
    $ficha .= '<ol>';
    $ficha .= '<li>Chica: '. $producto['presentacion']['chica'] . '</li>'; 
    $ficha .= '<li>Mediana: '. $producto['presentacion']['mediana'] . '</li>';
    $ficha .= '<li>Grande: '. $producto['presentacion']['grande'] . '</li>';
    $ficha .= '</ol>';
    $ficha .= '</ul>';

    echo $ficha;
}