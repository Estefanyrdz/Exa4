<?php 
session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Integrante.php');
    include ('../../controllers/IntegranteController.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');

	$equipoC = new IntegranteController();
	
?>	
<div class=row>
	<body background="pa2.jpg">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h2 class="text-center">Lista integrantes</h2>
			<?php $equipoC->show_grid(); ?>
		</div>
		<div class="col-md-2">
		</div>
</div>
<?php include ('../layouts/footer.php'); ?>