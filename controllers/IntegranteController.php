<?php
	class IntegranteController extends Integrante{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Integrante();
		}
		public function insertaIntegrante($datos){
		
			//$int = new Integrante();
			$this->set_nombre($datos['nombre']); 
		    $this->set_idequipo($datos['idequipo']); 
		    $this->set_apellido($datos['apellido']); 
		     //$this->set_idequipo($datos['id']); 
		    $this->set_peso($datos['peso']); 
		    $this->set_edad($datos['edad']); 
		    $this->set_estatura($datos['estatura']); 
		  $this->set_foto($_FILES['foto']['name']);
		     move_uploaded_file($_FILES['foto']['tmp_name'],"../img/".$_FILES['foto']['name']);
		   if(count($this->errores)>0){
		   	    $this->muestra_errores=true;
		   }else{
		   	$this->inserta($this->get_atributos()); 
		   }
		  
		}
		public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuarios where email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}
			
		}

		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}

	}


?>