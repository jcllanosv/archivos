<?php
class Persona {
	public $Nombre;
	public $Apellido;
	public $Rut;
	function __construct() {
	//	echo "Persona Instanciada";
   }

   public function saludar_persona(){
   		return "Hola, soy ".$this->Nombre." ".$this->Apellido." y mi RUT es ".$this->Rut;
   }

	 public function despedir_persona(){
			 return "Soy ".$this->Nombre." ".$this->Apellido." y me despido. Que tenga un buen dia";
	 }

   public function setNombre($Nombre_input){
   		$this->Nombre = $Nombre_input;
   }
   public function getNombre(){
   		return $this->Nombre;
   }

	public function setApellido($Apellido_input){
		$this->Apellido = $Apellido_input;
	}

	public function getApellido(){
		return $this->Apellido;
	}

	public function setRut($Rut_input){
 		$this->Rut = $Rut_input;
  }
  public function getRut(){
 		return $this->Rut;
  }

	public function despedida(){
		return "Adios";
	}

}

/*--------------- Persona 1 -------------------- */
$obj = new Persona();
$obj->setNombre("Juan");
$obj->setApellido("Llanos");
$obj->setRut("12.617.069-6");

/*--------------- Persona 2 -------------------- */
$obj_2 = new Persona();
$obj_2->setNombre("Carlitos");
$obj_2->setApellido("Forever");
$obj_2->setRut("15.123.345-6");

/*--------------- Persona 3 -------------------- */
$obj_3 = new Persona();
$obj_3->setNombre("Electra");
$obj_3->setApellido("Viator");
$obj_3->setRut("17.324.231-5");


echo "<br>".$obj->saludar_persona();
echo "<br>".$obj->despedir_persona();
echo "<br>".$obj_2->saludar_persona();
echo "<br>".$obj_2->despedir_persona();
echo "<br>".$obj_3->saludar_persona();
echo "<br>".$obj_3->despedir_persona();




?>
