<?php 
  
  include 'php/admin_pcabesa.php';
  
 ?>

 <!-- segunda parte -->
    <ol class="breadcrumb">
         <li><a href="admin-index.php">Inicio</a></li>
         <li><a href="lista_alumnos.php">Listado de Calificaciones</a></li>
         <li class="active">Nuevo calificacion</li>
    </ol>

  <div class="panel-dafault" style="margin-top: 10px" > <!--panel de crear --> 
  	   <div class="panel-heading"> 
  	    	<h1>Registro de Calificacion</h1>   
  	   </div>
         <div class="panel-heading">  
  	   </div>
  	     <div class="panel-body wow bounceInLeft">
		   <form action="php/califi_registro.php?accion=INS" method="POST">
  	     	 	<div>
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
							 <i class="glyphicon glyphicon-user"></i>
  	     	 		 		<label class="control-label">Nota del alumnos<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="nota" required="" placeholder="Nota del alumnos" class="form-control">
  	     	 		 	</div>
						 </div>
						 
						 <!-- tercera parte--> 
						 <div class="row">
  	     	 		<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="glyphicon glyphicon-phone"></i>
  	     	 		 		<label class="control-label">Materia<span style="color: Red">*</span></label>
						   <select class="form-control" name="materia">
                            <option>Matematica</option>
                            <option>Español</option>
							<option>Naturales</option>
							<option>Informatica</option>
							<option>Arte</option>
							<option>Religión</option>
                        </select>	 
  	     	 		 	</div>
  	     	 		 </div>
						 </div>
						 </div>

						 
						 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <label class="control-label">Nombre de Alumnos<span style="color: Red">*</span></label>
					<select name="codalum" class = "form-control">
					<?php
					include 'php/conexion.php';
					$getAlumno1 = "select * from alumnos ORDER BY nombre";
					$gerAlumno2 = $mysqli->query ($getAlumno1);
					while ($row = mysqli_fetch_array($gerAlumno2))
					{
						$id = $row ['id_alum'];
						$nombre = $row['nombre'];
						$apellido = $row['apellido'];

						?>
						<option value="<?php echo $id;?>"><?php echo $nombre." ".$apellido;?> </option>

						<?php

					}

					?>
					</select>
							 </div>
					</div>

						 
					

  	     	 	<!-- tercera parte 
  	     	 	<div class="row">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="glyphicon glyphicon-phone"></i>
  	     	 		 		<label class="control-label">Codigo de bloque<span style="color: Red">*</span></label>
  	     	 		 		<input type="tel" name="codblo" required="" placeholder="Codigo de bloque" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
						 </div>-->
						 

  	     	 	<!-- parte que ocupada la pantalla completa -->
  	     	 	<div class="row">
  	     	 		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 			<div class="form-group">
						
  	     	 				<a href="lista_califi.php" class="btn btn-danger">Atras</a>
  	     	 				<input type="submit" value="Guardar" class="btn btn-success">

								
  	     	 			</div>
  	     	 		</div>
  	     	 	</div>

  	     	 </form>
  	     </div>
  </div>

<?php
      include 'php/admin_ppie.php'; 

?>