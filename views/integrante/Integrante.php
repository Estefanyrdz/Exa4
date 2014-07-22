<?php 
    include ('../../libs/security.php');
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Integrante.php');
    include ('../../controllers/IntegranteController.php');
    include ('../../libs/Er.php');
        include ('../../libs/Fun.php');

       $funErrores = new FunErrores();
       $equipoC= new IntegranteController();
      if(isset($_POST['nombre'])){
        $equipoC->insertaIntegrante($_POST);
    	}
      
?>
		<div class="row">
		<body background="pa.jpg">
			<div class="col-md-12">
				<div class="jumbotron">
				  <h2>FORMULARIO INTEGRANTE</h2>
				  <p><button id="boton" class="btn btn-primary">Formularios</button></p>
				</div>
			</div>
		</div>
		<div class="container-fluid" >
			<div class="row" >
			  <div class="col-md-3">
					<h3 align="center"><strong>Formulario Integrante</strong></h3>
					<div id="container" class="elemento1">
						<div>
							<div class="form-group">
							<form role="form" id="integrante" action="" method="POST" enctype="multipart/form-data">
		                  <label for="nombre">Nombre:</label>
		                  <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $equipoC->get_nombre();?>">
                           </div>
                           <div class="form-group">
		                  <label for="apellido">Apellido:</label>
		                  <input type="text" class="form-control" id="apellido" name="apellido"value="<?php echo $equipoC->get_apellido();?>">
                           </div>
                           <div class="form-group">
		                  <label for="peso">Peso:</label>
		                  <input type="text" class="form-control" id="peso" name="peso" value="<?php echo $equipoC->get_peso();?>">
                           </div>
                            <div class="form-group">
		                  <label for="estatura">Estatura:</label>
		                  <input type="text" class="form-control" id="estatura" name="estatura" value="<?php echo $equipoC->get_estatura();?>">
                           </div>
                            <div class="form-group">
		                  <label for="edad">Edad:</label>
		                  <input type="text" class="form-control" id="edad" name="edad" value="<?php echo $equipoC->get_edad();?>">
                           </div>
                           <label for="idequipo">Equipo: </label>
			                <?php echo $equipoC->getDropDown2 ('equipo', 'idequipo','idequipo'); ?>
                            <div class="form-group">
		                  <label for="foto">foto:</label>
		                  <input type="file" class="form-control" id="foto" name="foto">
                           </div>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
				<div class="col-md-3">
					<h3 align="center"><strong>Integrante</strong></h3>
					<div id="container" class="elemento1">
						<div>
							<button id="boton2" class="btn btn-info">Entrenador</button>
							</div>
							<br/>
							<div>
							<p><button id="boton3" class="btn btn-primary">Jugador</button></p>
							</div>
					</div>
				</div>
				<h3 align="center"><strong>Tipo de Integrante</strong></h3>
				<div class="col-md-3">
					<div id="container" class="elemento2">
						<form>
							<div >
								<label>Tipo de Entrenador</label>
				                 <select name="id_entrenador">
				                  <option value="1">1</option>
				                  <option value="2">2</option>
				                  <option value="3">3</option>
				                 </select><br/>
				                 <label>Pais</label>
				                 <select name="id_entrenador">
				                  <option value="Mexico">Mexico</option>
				                  <option value="Usa">Usa</option>
				                  <option value="Brasil">Brasil</option>
				                 </select>
							</div>
						</form>	
					</div>
				</div>
				<div class="col-md-3">
					<div id="container" class="elemento3">
						<form>
							<div >
				                 <label>Tipo de Integrante</label>
				                 <select name="id_integrante">
				                  <option value="1">1</option>
				                  <option value="2">2</option>
				                  <option value="3">3</option>
				                 </select><br/>
				                 <label>Posicion</label>
				                 <select name="id_posicion">
				                  <option value="Delantero">Delantero</option>
				                  <option value="Portero">Portero</option>
				                  <option value="Medio">Medio</option>
				                 </select>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>	
<?php $funErrores->alertErrores($equipoC); ?> 
<?php include ('../layouts/footer.php'); ?>