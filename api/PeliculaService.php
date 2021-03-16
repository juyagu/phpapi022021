<?php

require_once 'conexion/conexion.php';

class PeliculaService {
    private $conexion;
    public function __construct(){
        $this->conexion = Conexion::conectar();
    }

    public function getPeliculas(){
        try{
            $query = "select * from peliculas111";
            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $response;
        }catch(Exception $ex){
            throw $ex;
        }
    }

    public function guardarPelicula($pelicula){
        try{
    		$titulo = $pelicula['titulo'];
    		$director = $pelicula['director'];
    		$genero = $pelicula['genero'];
    		$foto = $pelicula['foto'];
    		$habilitado = $pelicula['habilitado'];

    		$query="insert into peliculas(titulo,director,genero,foto,habilitado) values (:titulo,:director,:genero,:foto,:habilitado)";

    		$stmt = $this->conexion->prepare($query);
    		$stmt->bindParam(':titulo',$titulo);
    		$stmt->bindParam(':director',$director);
    		$stmt->bindParam(':genero',$genero);
    		$stmt->bindParam(':foto',$foto);
    		$stmt->bindParam(':habilitado',$habilitado);
        	$stmt->execute();

        
        	return 1;
    	}catch(Exception $ex){
    		throw $ex;
    	}
    }
}