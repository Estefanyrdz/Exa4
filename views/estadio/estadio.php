<?php 
  session_start();
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Estadio.php');
    include ('../../controllers/EstadioController.php');
    include ('../../libs/Er.php');
    include ('../../libs/Fun.php');

       $funErrores = new FunErrores();
      $equipoC= new EstadioController();
      if(isset($_POST['Nombre'])){
        $equipoC->insertaEstadio($_POST);
    	}

?>
<br/><br/>
			<div class="row">
			 <body background="esta.jpg">
				<div class="col-md-6">
				<form role="form" id="estadio" action="" method="POST">
					  <div class="form-group">
						<label for="nombre">Nombre: </label>
						<input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $equipoC->get_Nombre();?>">
					  </div>
            <div>
             <label for="exampleInputEmail1">Ciudad: </label>
                          <select name="idciudad">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          </select>
                        </div>
                         <button type="submit" class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>	
<?php $funErrores->alertErrores($equipoC); ?> 
<?php include ('../layouts/footer.php'); ?>
