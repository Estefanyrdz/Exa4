<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Equipo();
		}
		
		public function insertaEquipo($datos, $archivos){

			//$equipo = new Equipo();
			
			$this->set_nombre($datos['nombre']);
			$this->set_idpais($datos['idpais']);
			$this->set_escudo($archivos['escudo']);
			
			if(count($this->errores)>0){
				// print_r($equipo->errores);
				$this->muestra_errores = true;
				
			}
			else{
				move_uploaded_file($archivos['escudo']['tmp_name'],"../img/".$archivos['escudo']['name']);
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