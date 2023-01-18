<?php
    include './php/admin_pcabesa.php';
	$query=extraeralumnoUTD($_GET['id']);
	
    $row=$query->fetch_assoc();

?>

<!-- segunda parte -->
<ol class="breadcrumb">
         <li><a href="admin-index.php">Inicio</a></li>
         <li><a href="lista_alumnos.php">Listado de Alumno</a></li>
         <li class="active">Nuevo Alumno</li>
    </ol>

  <div class="panel-dafault" style="margin-top: 10px" > <!--panel de crear --> 
  	   <div class="panel-heading"> 
			  <h1>Actualizar Alumno</h1>  
			  
    </div>
    <div class="panel-body">
        <form action="./php/alumno_registro.php?accion=UDT" method="POST">
           
        <div>
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Codigo <span style="color:red">*</span> </label>
                        <input type="text" name="codigo" require="" placeholder="codigo" class="form-control" readonly="" value="<?php echo $row['id_alum']?>">
                    </div>
				</div>
				
				
				
				<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Estado <span style="color:red">*</span> </label>
                        <select class="form-control" name="estado">
                            <option value="A" <?php if($row['estado']=='A'){echo "selected";} ?>>Activo</option>
                            <option value="I" <?php if($row['estado']=='I'){echo "selected";} ?>>Inactivo</option>
                        </select>
                    </div>
                </div>
			</div>
			

                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Sexo<span style="color:red">*</span> </label>
                        <select class="form-control" name="sexo">
                            <option value="Hombre" <?php if($row['sexo']=='Hombre'){echo "selected";} ?>>Hombre</option>
                            <option value="Mujer" <?php if($row['sexo']=='Mujer'){echo "selected";} ?>>Mujer</option>
                        </select>
                    </div>
                </div>
			</div>
			
           
            <div >
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
  	     	 		 		<label class="control-label">Nombres<span style="color: Red"></span></label>
  	     	 		 		<input type="text" name="nombre" required="" placeholder="Nombres" class="form-control" value="<?php echo $row['nombre']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Apellidos<span style="color: Red"></span></label>
  	     	 		 		<input type="text" name="apellidos" required="" placeholder="Apellidos" class="form-control"value=" <?php echo $row['apellido']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	</div>

  	     	 	<!-- tercera parte--> 
  	     	 	<div>
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Telefono<span style="color: Red"></span></label>
  	     	 		 		<input type="tel" name="tel" required="" placeholder="Telefono" class="form-control" value="<?php echo $row['telefono']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Fecha de Nacimiento<span style="color: Red"></span></label>
  	     	 		 		<input type="date" name="fecha" required="" placeholder="Apellidos" class="form-control" value="<?php echo $row['fecha_alum']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	</div>


                   	<!-- mas partes debajo --> 
  	     	 	<div>
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Correo<span style="color: Red"></span></label>
  	     	 		 		<input type="tel" name="correo" required="" placeholder="Correo" class="form-control" value="<?php echo $row['email']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		 <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Domicilio<span style="color: Red"></span></label>
  	     	 		 		<input type="domiciolio" name="dom" required="" placeholder="domicilio" class="form-control" value="<?php echo $row['direccion']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 	
						

            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">      
                    <div class="form-group">
                    <a href="lista_alumnos.php" class="btn btn-danger">Atrás</a>
                    <input type="submit" value="Actualizar" class="btn btn-success">

                    </div>
                </div>
            </div>

        </form>
    </div>

</div>


<?php  
    include './php/admin_ppie.php';
?>