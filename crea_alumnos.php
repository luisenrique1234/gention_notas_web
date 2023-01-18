<?php 
  
  include 'php/admin_pcabesa.php';
  
 ?>

 <!-- segunda parte -->
    <ol class="breadcrumb">
         <li><a href="admin-index.php">Inicio</a></li>
         <li><a href="lista_alumnos.php">Listado de Alumno</a></li>
         <li class="active">Nuevo Alumno</li>
    </ol>

  <div class="panel-dafault" style="margin-top: 12px" > <!--panel de crear --> 
  	   <div class="panel-heading"> 
  	    	<h1>Nuevo Alumno</h1>   
  	   </div>
         <div class="panel-heading">  
  	   </div>
  	     <div class="panel-body wow bounceInLeft">
		   <form action="php/alumno_registro.php?accion=INS" method="POST">
  	     	 	<div class="row">

					<div class="col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-lg-2 col-lg-offset-3 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <label class="control-label">Grupos<span style="color: Red">*</span></label>
					<select name="grupos" class = "form-control">
					<?php
					include 'php/conexion.php';
					$getAlumno1 = "select * from grupos ORDER BY id_grupos";
					$gerAlumno2 = $mysqli->query ($getAlumno1);
					while ($row = mysqli_fetch_array($gerAlumno2))
					{
						$id = $row ['id_grupos'];
						$nombregru = $row['nombre_grupos'];
						

						?>
						<option value="<?php echo $id;?>"><?php echo $nombregru;?> </option>

						<?php

					}

					?>
					</select>
							 </div>
					</div>

					<div class="col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-lg-2 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                         <div class="form-group">
                        <label for="" class="control-label">Sexo <span style="color:red">*</span> </label>
                        <select class="form-control" name="sexo">
                            <option>Hombre</option>
                            <option>Mujer</option>
                        </select>
                        </div>
  	     	 		 </div>
  	     	 	     </div>
					</div>
					</div>

					

					
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-3 col-lg-offset-3 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
							 <i class="glyphicon glyphicon-user"></i>
  	     	 		 		<label class="control-label">Nombres<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="nombre" required="" placeholder="Nombres" class="form-control">
  	     	 		 	</div>
						 </div>
						 </div>
						 
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-3 col-lg-offset-1 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Apellidos<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="apellidos" required="" placeholder="Apellidos" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
					</div>
					</div>
					

  	     	 	<!-- tercera parte--> 
  	     	 	<div >
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-3 col-lg-offset-3 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="glyphicon glyphicon-phone"></i>
  	     	 		 		<label class="control-label">Telefono<span style="color: Red">*</span></label>
  	     	 		 		<input type="tel" name="tel" required="" placeholder="Telefono" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
						 
						 
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-1 col-lg-2 col-lg-offset-1 col-xs-10 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="far fa-calendar-alt"></i>
  	     	 		 		<label class="control-label">Fecha de Nacimiento<span style="color: Red">*</span></label>
  	     	 		 		<input type="date" name="fecha" required="" placeholder="Fecha de Nacimiento" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	</div>
               

                   	<!-- mas partes debajo --> 
  	     	 	<div>
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-3 col-lg-offset-3 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="glyphicon glyphicon-envelope"></i>
  	     	 		 		<label class="control-label">Correo<span style="color: Red">*</span></label>
  	     	 		 		<input type="tel" name="correo" required="" placeholder="Correo" class="form-control">
  	     	 		 	</div>
						 </div>

						 <!-- mas partes debajo contrasena

						 <div class="row">

  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-1 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="glyphicon glyphicon-envelope"></i>
  	     	 		 		<label class="control-label">Password<span style="color: Red">*</span></label>
  	     	 		 		<input type="password" name="pass" required="" placeholder="Password" class="form-control">
  	     	 		 	</div>
						 </div> --> 
						 
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-1 col-lg-4 col-lg-offset-1 col-xs-10 col-xs-offset-0">
  	     	 		 	<div class="form-group">
							 <i class="fas fa-map-pin"></i>
  	     	 		 		<label class="control-label">Domicilio<span style="color: Red">*</span></label>
  	     	 		 		<input type="domiciolio" name="dom" required="" placeholder="domicilio" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	
						 

  	     	 	<!-- parte que ocupada la pantalla completa -->
  	     	 	<div class="row">
  	     	 		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-3 col-xs-12 col-xs-offset-0">
  	     	 			<div class="form-group">
						
  	     	 				<a href="lista_alumnos.php" class="btn btn-danger">Atras</a>
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