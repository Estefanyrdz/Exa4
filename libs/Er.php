<?php

class Er {

	//E-mail
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	//VALIDA QUE EL VALOR DADO SEAN SOLO NUMEROS
	public function valida_numero($valor){
		$exp_reg = "/^[[:digit:]]+$/"; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//nombre
	public function valida_nombre($valor){
	$exp_reg = '/^[a-zA-Z, ,_]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	//pais
	public function valida_pais($valor){
	$exp_reg = '/^[a-zA-Z0-9, ,_]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//bandera
	public function valida_bandera($valor){
	$exp_reg = '/^[a-zA-Z0-9, ,_]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//idcontinente
	public function valida_idcontinente($valor){
	$exp_reg = '/^[1-5]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//idpais
	public function valida_idpais($valor){
	$exp_reg = '/^[1-9]*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	//escudo
	public function valida_escudo($valor){
	$exp_reg = '/^(.+\.jpg|.+\.jpeg|.+\.png)*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_apellido($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ]{1,50})*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_peso($valor){
		$exp_reg = '/^[[:digit:].[:digit:]]+$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_estatura($valor){
		$exp_reg = '/^[[:digit:].[:digit:]]+$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_edad($valor){
		$exp_reg = '/^[[:digit:]]+$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_idequipo($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
		public function valida_imagen($valor) {    
       $exp_reg = '/^(.+\.jpg|.+\.jpeg|.+\.png)*$/';
	if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
    public function valida_abreviatura($valor){
		$exp_reg = '/^([a-zA-Z])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_idciudad($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}	
	
}
?>    