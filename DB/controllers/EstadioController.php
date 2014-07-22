<?php
	class EstadioController  extends Estadio{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Estadio();
		}
		public function insertaEstadio($datos){
		 
			//$esta = new Estadio();
			$this->set_Nombre($datos['Nombre']); 
            $this->set_idciudad($datos['idciudad']); 
		   if(count($this->errores)>0){
		   	      $this->muestra_errores=true;
		   }else{
		   	$this->inserta($this->get_atributos()); 
		   }

		}
	}


?>