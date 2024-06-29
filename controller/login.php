<?php
include_once('../model/funciones.php');

if(isset($_POST['usuario']) && ($_POST['contra']))
{
    $fun = new funciones();

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contra'];
   
    $resultado = $fun->login($usuario ,$contraseña); 

    if(count($resultado) >= 1){ 
      echo "<script>alert('Bienvenido: ".$resultado[0]['ID']." ');</script>"; 
    }else{ 
     //echo "<script>alert('Incorrecto');</script>";
    }
  }


?>