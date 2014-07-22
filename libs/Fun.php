<?php
  class FunErrores{

    function __construct(){}

    public function alertErrores($objeto){

      if ($objeto->muestra_errores) {
          echo '<div class="alert alert-danger">';
          foreach ($objeto->errores as $value) echo "<p>$value</p>";
          echo '</div>';
      }
    }

}
?>