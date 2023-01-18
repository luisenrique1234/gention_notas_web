<?php 
  
  include 'php/admin_pcabesa.php';
  
 ?>

 <!-- segunda parte -->
    <ol class="breadcrumb">
         <li><a href="admin-index.php">Inicio</a></li>
         <li><a href="lista_bloque.php">Listado de Bloque</a></li>
         <li class="active">Nuevo Bloque</li>
    </ol>

  <div class="panel-dafault" style="margin-top: 10px" > <!--panel de crear --> 
  	   <div class="panel-heading"> 
  	    	<h1>Registro de Bloque</h1>   
  	   </div>
         <div class="panel-heading">  
  	   </div>
  	     <div class="panel-body wow bounceInLeft">
		   <form action="php/bloque_registro.php?accion=INS" method="POST">
  	     	 	<div class="row">
  	     	 		<div class="col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-lg-2 col-lg-offset-1 col-xs-11 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
							 <i class="glyphicon glyphicon-user"></i>
  	     	 		 		<label class="control-label">Nombre de Bloque<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="bloque" required="" placeholder="Nombre de Bloque" class="form-control">
  	     	 		 	</div>
  	     	 		 </div>
						 
						 
				     <div class="row">
  	     	 		<div class="col-md-3 col-md-offset-2 col-sm-3 col-sm-offset-2 col-lg-2 col-lg-offset-0 col-xs-11 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
							 <i class="glyphicon glyphicon-user"></i>
  	     	 		 		<label class="control-label">Codigo de Grupo<span style="color: Red">*</span></label>
									<select name="codgru" class = "form-control">
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

  	     	 	<!-- parte que ocupada la pantalla completa -->
  	     	 	<div class="row">
  	     	 		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 			<div class="form-group">
						
  	     	 				<a href="lista_bloque.php" class="btn btn-danger">Atras</a>
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