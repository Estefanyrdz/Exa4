<?php 
  session_start();
  include ('../layouts/header.php');
?>
	<body background="fondo-mundial.jpg">

	<div class="row" align="center">
		<div class="col-md-1" >
			
			<label></label>
		</div>
		<div class="col-md-3" >
			<label>Registrar Integrante</label>
			<a href="../integrante/integrante.php"><img src="easports2014.jpg"></a>
		</div>

		<div class="col-md-3">
			<label>Registrar Equipo</label>
			<a href="../equipo/equipo.php"><img src="selec.jpg"></a>
		</div>

		<div class="col-md-3">
			<label>Registrar Pais</label>
			<a href="../pais/pais.php"><img src="mundo_de_banderas[1].gif"></a>
		</div>
		<div class="col-md-1" >
			<label></label>
		</div>
	</div>
	<br/><br/><br/>
	<div class="row" align="center">
	<div class="col-md-1" >
			<label></label>
		</div>
		<div class="col-md-3" >
			<label>Lista de Integrantes</label>
			<a href="../integrante/listaint.php"><img src="int.jpg"></a>
		</div>

		<div class="col-md-3">
			<label>Lista de Equipos</label>
			<a href="../equipo/listaequipo.php"><img src="paises-mundial-2014.jpg"></a>
		</div>

		<div class="col-md-3">
			<label>Registrar Continente</label>
			<a href="../continente/continente.php"><img src="Clasificados-2014.jpg"></a>
		</div>
		<div class="col-md-1" >
			<label></label>
		</div>
	</div>

<?php include ('../layouts/footer.php'); ?>