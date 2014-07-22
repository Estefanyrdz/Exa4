<?php 
	include ('../../libs/security.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Equipo.php');
    include ('../../controllers/EquipoController.php');
    include ('../../libs/Er.php');
	include ('../../libs/Fun.php');
	include ('../layouts/header.php');

	$funErrores = new FunErrores();
	$equipoC = new EquipoController();
	if(isset($_POST['nombre'])){
		$equipoC->insertaEquipo($_POST, $_FILES);
	}
?>	
<div class=row>
	<body background="madrid10.jpg">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<?php $funErrores->alertErrores($equipoC); ?> 
			
			<form role="form" id="Formularioequipo" action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nombre">Nombre: </label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $equipoC->get_nombre();?>" placeholder="Nombre del equipo">
				</div>
				<div class="form-group">
					<label for="idpais">Id Pais: </label>
					<?php echo $equipoC->getDropDown ('pais', 'idpais','idpais'); ?>
				</div>
				<div class="form-group">
					<label for="escudo">Escudo: </label>
					<input type="file" id="escudo" name="escudo">
				</div>
				<div>
				<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
					<h4>¿No se encuentra el pais que deseas en la lista?</h4>
					<h4>Ingresalo <a href="pais.php">Aqui<a></h4>
			</form>
			<div>
				<button type="button" class="btn btn-info">
				<a class="fancybox fancybox.iframe" href="listaequipo.php">Mostrar Lista de Equipos</a>
				</button>
			</div>

		</div>
		<div class="col-md-2">
		</div>
			

</div>
<?php include ('../layouts/footer.php'); ?>