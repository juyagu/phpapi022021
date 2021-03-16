<?php
/**
 * API Peliculas
 * @version 1.0.0
 */

require_once __DIR__ . '/vendor/autoload.php';
require_once './PeliculaService.php';

$app = new Slim\App();


/**
 * GET obtenerGeneros
 * Summary: Géneros de películas
 * Notes: Obtener los géneros de las películas
 * Output-Formats: [aplication/json]
 */
$app->GET('/peliculasapi/generos', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing obtenerGeneros as a GET method ?');
            return $response;
            });


/**
 * POST addPelicula
 * Summary: insertar una nueva pelicula
 * Notes: Adds an item to the system
 * Output-Formats: [application/json]
 */
$app->POST('/peliculasapi/peliculas', function($request, $response, $args) {
    try {
        // $_PUT / $_DELETE
        $svcPelicula = new PeliculaService();
        $pelicula = json_decode(file_get_contents('php://input'),true);
        $svcPelicula->guardarPelicula($pelicula);
        $resultado = json_encode(array("mensaje" => "La pelicula fue guardada correctamente"));
        $status = 201;
    }catch(Exception $ex){
        $resultado = json_encode(array("error" => "No se pudo almacenar la pelicula, intente mas tarde"));
        $status = 500;
    }finally{
        $response->getBody()->write($resultado);
        return $response
            ->withHeader('Content-Type','application/json')
            ->withStatus($status);
    }
});


/**
 * DELETE eliminarPelicula
 * Summary: Eliminar una película por su ID
 * Notes: Eliminar una pelicula por su ID
 * Output-Formats: [application/json]
 */
$app->DELETE('/peliculasapi/peliculas/{id}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing eliminarPelicula as a DELETE method ?');
            return $response;
            });


/**
 * GET getPeliculas
 * Summary: obtener peliculas
 * Notes: Obetener la totalidad de las películas guardadas en la base de datos 
 * Output-Formats: [application/json]
 */
$app->GET('/peliculasapi/peliculas', function($request, $response, $args) {
    try{
        $svcPeliculas = new PeliculaService();
        $resultado = json_encode($svcPeliculas->getPeliculas());
        $status = 200;
    }catch(Exception $ex){
        $resultado = json_encode(["error" => "No se pudo realizar la consulta, intente mas tarde"]);
        $status = 500;
    }finally{
        $response->getBody()->write($resultado);
        return $response
            ->withHeader('Content-Type','application/json')
            ->withStatus($status);
    }        
});


/**
 * GET getPeliculasxId
 * Summary: obtener peliculas por id
 * Notes: Obetener la totalidad de las películas guardadas en la base de datos 
 * Output-Formats: [application/json]
 */
$app->GET('/peliculasapi/peliculas/{id}', function($request, $response, $args) {
            
            $id_pelicula = $args['id'];
            var_dump($id_pelicula);
            //$response->write('How about implementing getPeliculasxId as a GET method ?');
            //return $response;
            });


/**
 * PUT updatePelicula
 * Summary: modificar una película
 * Notes: Modificar una película
 * Output-Formats: [application/json]
 */
$app->PUT('/peliculasapi/peliculas/{id}', function($request, $response, $args) {
    try{
        $svcPeliculas = new PeliculaService();
        $pelicula = json_decode(file_get_contents('php://input'),true);
        $pelicula['id'] = $args['id'];
        $svcPeliculas->modificarPelicula($pelicula);
        $resultado = json_encode(array("mensaje" => "La pelicula fue modificada correctamente"));
        $status = 200;
    }catch(Exception $ex){
        $resultado = json_encode(["error" => "No se pudo realizar la consulta, intente mas tarde"]);
        $status = 500;
    }finally{
        $response->getBody()->write($resultado);
        return $response
            ->withHeader('Content-Type','application/json')
            ->withStatus($status);
    }      
});



$app->run();
