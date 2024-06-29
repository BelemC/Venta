<?php

class Conexion {
   
    private static $instance; //Declarar la propiedad como estatica
    private $base_de_datos;

    public function __construct(){ //Login
        $usuario ="sa";
        $contraseña = "eloy1234";
        $nombreBaseDeDatos ="Proyeto1";
        $rutaServidor = "DESKTOP-QD992NJ";

        try {
            $this->base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario,  $contraseña);
            $this->base_de_datos->setAttribute(PDO:: SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_SYSTEM);
        } catch(exception $e) {
            echo "Ocurrio un error en la conexion: " . $e->getmessage();
        }
    }

    public static function getInstance(){
        if(self::$instance === null){
           self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function obtenerConexion(){
        return self::$instance->base_de_datos;
    }

}



?>