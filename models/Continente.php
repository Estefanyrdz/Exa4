<?php

class Continente extends Modelo{
    public $nombre_tabla = 'continente';
    public $pk = 'idcontinente';
    
    
    public $atributos = array(
        'nombre'=>array(),
      
    );
    
    public $errores = array( );
    
    private $nombre;

    
    function Continente(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

               
        $this->nombre = trim($valor);
        
    }
   

    
    
    
}

?>