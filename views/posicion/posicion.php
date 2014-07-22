<?php 
 session_start();
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Posicion.php');
    include ('../../controllers/PosicionController.php');
    include ('../../libs/Er.php');
      include ('../../libs/Fun.php');

       $funErrores = new FunErrores();
       $equipoC= new PosicionController();
      if(isset($_POST['nombre'])){
        $equipoC->insertaPosicion($_POST);
    	}
    
?>
<br/>
			<div class="row">
				<body background="pos.jpg">
				<div class="col-md-6">
					<form role="form" id="posicion" action="" method="POST">
					  <div class="form-group">
						<label for="nombre">Nombre: </label>
						<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $equipoC->get_nombre();?>"/>
					  </div>
					  <div class="form-group">
						<label for="abreviatura">Abreviatura: </label>
						<input type="text" class="form-control" id="abreviatura" name="abreviatura" value="<?php echo $equipoC->get_abreviatura();?>"/>
					  </div>
					  <button type="submit" class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>	
<?php $funErrores->alertErrores($equipoC); ?> 
<?php include ('../layouts/footer.php'); ?>    