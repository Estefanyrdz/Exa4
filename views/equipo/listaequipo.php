<?php 
session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Equipo.php');
    include ('../../controllers/EquipoController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');

	$equipoC = new EquipoController();
	
?>	
<div class=row>
	<body background="brazil14_fondo.jpg">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h2 class="text-center">Lista equipos</h2>
			<?php $equipoC->show_grid(); ?>
		</div>
		<div class="col-md-2">
		</div>
</div>
<?php include ('../layouts/footer.php'); ?>