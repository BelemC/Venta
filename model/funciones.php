<?php

require_once ('db.php');

class funciones {
    private $conexion;

    public function __construct() {
        $this->conexion = conexion::getInstance();
        
    }

    public function login($pam1,$pam2) {
        try {
          $params = array(':p1' => 'login2',':p2' => $pam1, ':p3' => $pam2);
          $query = $this->conexion->obtenerConexion()->prepare("EXEC Belem_consul :p1,:p2,:p3");
          $query->execute($params);
    
          return $query->fetchAll();

        } catch (PDOException $e) {
          echo '<script language="javascript">alert("Error: '.$e->getMessage().'");</script>';
        }
      }
}