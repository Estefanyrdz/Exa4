<?php
	class PosicionController extends Posicion{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Posicion();
		}
		public function insertaPosicion($datos){
			
			//$pos = new Posicion();
			$this->set_nombre($datos['nombre']); 
		    $this->set_abreviatura($datos['abreviatura']); 
		  
		   if(count($this->errores)>0){
		   	    $this->muestra_errores=true;
		   }else{
		   	 $this->inserta($this->get_atributos()); 
		   }
	

		}
	}


?>