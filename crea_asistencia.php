<?php 
  
  include 'php/admin_pcabesa.php';
  
 ?>

 <!-- segunda parte -->
    <ol class="breadcrumb">
         <li><a href="admin-index.php">Inicio</a></li>
         <li><a href="lista_asistencia.php">Listado de Asistencia</a></li>
         <li class="active">Nuevo Asistencia</li>
    </ol>

  <div class="panel-dafault" style="margin-top: 10px" > <!--panel de crear --> 
  	   <div class="panel-heading"> 
  	    	<h1>Registro de Asistencia</h1>   
  	   </div>
         <div class="panel-heading">  
  	   </div>
  	     <div class="panel-body wow bounceInLeft">
		   <form action="php/asistencia_registro.php?accion=INS" method="POST">
  	     	 	<div>
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
							 <i class="glyphicon glyphicon-user"></i>
							 <label class="control-label">Fecha de Asistencia<span style="color: Red">*</span></label>
  	     	 		 		<input type="date" name="fecha" required="" placeholder="Fecha de Nacimiento" class="form-control">
  	     	 		 	</div>
						 </div>
						 
						 <!-- tercera parte--> 
						 <div class="row">
  	     	 		<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <label for="" class="control-label">Asistencia<span style="color:red">*</span> </label>
                        <select class="form-control" name="asis">
                            <option value="P">Presenten</option>
                            <option value="A">Aucente</option>
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
						$id_grupos = $row['id_grupos'];

						?>
						<option value="<?php echo $id;?>"><?php echo $nombre." ".$apellido." G-".$id_grupos;?> </option>

						<?php

					}

					?>
					</select>
							 </div>
					</div>

						 
					

  	     	 	<!-- tercera parte--> 
  	     	 	<div class="row">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
						<div class="form-group">
							 <label class="control-label">Nombre de Grupos<span style="color: Red">*</span></label>
					<select name="codgrup" class = "form-control">
					<?php
					include 'php/conexion.php';
					$getAlumno1 = "select * from grupos ORDER BY nombre_grupos";
					$gerAlumno2 = $mysqli->query ($getAlumno1);
					while ($row = mysqli_fetch_array($gerAlumno2))
					{
						$id = $row ['id_grupos'];
						$nombre1 = $row['nombre_grupos'];
						$id_grupo1 = $row['id_grupos'];
						

						?>
						<option value="<?php echo $id;?>"><?php echo $nombre1." Al-".$id_grupo1;?> </option>

						<?php

					}

					?>
					</select>
							 </div>
					</div>


  	     	 	<!-- parte que ocupada la pantalla completa -->
  	     	 	<div class="row">
  	     	 		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 			<div class="form-group">
						
  	     	 				<a href="lista_asistencia.php" class="btn btn-danger">Atras</a>
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