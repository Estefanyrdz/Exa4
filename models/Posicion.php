<?php

class Posicion extends Modelo{
    public $nombre_tabla = 'posision';
    public $pk = 'idposision';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'abreviatura'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $abreviatura;

       
    
    function Posicion(){
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
   public function get_abreviatura(){
        return $this->abreviatura;
    } 

    public function set_abreviatura($valor){

        $er = new Er();
        
        if ( !$er->valida_abreviatura($valor) ){
            $this->errores[] = "Esta abreviatura (".$valor.") no es valido";
        }

               
        $this->abreviatura = trim($valor);
        
    }


    
    
    
}

?>
