<?php
include('Persona.php');
$obj= new Persona();
$obj->setNombre("Electra");
$obj->setApellido("Viator");
$obj->setRut("17.324.231-5");
//Imprimir Objeto JSON.
 echo json_encode($obj);
 ?>
