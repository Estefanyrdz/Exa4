<?php 
    include ('../../libs/security.php');
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Continente.php');
    include ('../../controllers/ContinenteController.php');
    include ('../../libs/Er.php');
      include ('../../libs/Fun.php');

       $funErrores = new FunErrores();
      $equipoC= new ContinenteController();
      if(isset($_POST['nombre'])){
        $equipoC->insertaContinente($_POST);
      }
?>	
	<br/><br/>
	<div class="row">
	 <body background="fifa.jpg">
		<div class="col-md-6">
          <label>FORMULARIO CONTINENTE</label>
          <div class="row">
        <body background="fifa.jpg">
        <div class="col-md-6">
          <form role="form" id="continente" action="" method="POST">
               <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre"value="<?php echo $equipoC->get_nombre();?>">
                </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>	
<?php $funErrores->alertErrores($equipoC); ?> 
<?php include ('../layouts/footer.php'); ?>