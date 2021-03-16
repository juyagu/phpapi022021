<?php
/**
 * API Peliculas
 * @version 1.0.0
 */

require_once __DIR__ . '/vendor/autoload.php';

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
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing addPelicula as a POST method ?');
            return $response;
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
            
            $queryParams = $request->getQueryParams();
            $id = $queryParams['id'];    
            
            
            $response->write('How about implementing getPeliculas as a GET method ?');
            return $response;
            });


/**
 * GET getPeliculasxId
 * Summary: obtener peliculas por id
 * Notes: Obetener la totalidad de las películas guardadas en la base de datos 
 * Output-Formats: [application/json]
 */
$app->GET('/peliculasapi/peliculas/{id}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getPeliculasxId as a GET method ?');
            return $response;
            });


/**
 * PUT updatePelicula
 * Summary: modificar una película
 * Notes: Modificar una película
 * Output-Formats: [application/json]
 */
$app->PUT('/peliculasapi/peliculas/{id}', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing updatePelicula as a PUT method ?');
            return $response;
            });



$app->run();
