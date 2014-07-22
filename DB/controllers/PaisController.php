<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Pais();
		}
		public function insertaPais($datos){
		
			//$pais = new Pais();
			$this->set_nombre($datos['nombre']); 
		     $this->set_idcontinente($datos['idcontinente']); 
		     $this->set_bandera($_FILES['bandera']['name']);
		     move_uploaded_file($_FILES['bandera']['tmp_name'],"../img/".$_FILES['bandera']['name']);
		   if(count($this->errores)>0){
		   	     $this->muestra_errores=true;
		   }else{
		   	$this->inserta($this->get_atributos()); 
		   }

		}
	}
	
?>