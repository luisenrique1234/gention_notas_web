<?php
    include './php/admin_pcabesa.php';
	$query=extraerasistenciaUTD($_GET['id']);
	
    $row=$query->fetch_assoc();

?>

<!-- segunda parte -->
<ol class="breadcrumb">
         <li><a href="admin-index.php">Inicio</a></li>
         <li><a href="lista_asistencia.php">Listado de Asistencia</a></li>
         <li class="active">Nueva asistencia</li>
    </ol>

  <div class="panel-dafault" style="margin-top: 10px" > <!--panel de crear --> 
  	   <div class="panel-heading"> 
			  <h1>Actualizar Asistencia</h1>  
			  
    </div>
    <div class="panel-body">
        <form action="./php/asistencia_registro.php?accion=UDT" method="POST">
           
        <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Codigo Asistencia <span style="color:red">*</span> </label>
                        <input type="text" name="codigo" require="" placeholder="codigo" class="form-control" readonly="" value="<?php echo $row['id_asis']?>">
                    </div>
                </div>

                <div class="row">
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
  	     	 		 		<label class="control-label">Fecha de Asistencia<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="fecha" required="" placeholder="Apellidos" class="form-control" readonly="" value="<?php echo $row['fecha']?>">
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
            </div>

            
           
            <div class="row">
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
  	     	 		 		<label class="control-label">Codigo alumnos<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="calum" required="" placeholder="Nombre de alumnos" class="form-control" readonly="" value="<?php echo $row['id_alum']?>">
  	     	 		 	</div>
                         </div>
                         
                         <!--segunda parte del formulario --> 
  	     	 		 <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
						 <div class="form-group">
  	     	 		 		<label class="control-label">Codigo de Grupo<span style="color: Red">*</span></label>
  	     	 		 		<input type="tel" name="codrup" required="" placeholder="Codigo de bloque" class="form-control" readonly="" value="<?php echo $row['id_grupos']?>">
  	     	 		 	</div>
  	     	 		 </div>
  	     	 		


                         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Asistencia<span style="color:red">*</span> </label>
                        <select class="form-control" name="asis">
                            <option value="P" <?php if($row['asistencia']=='P'){echo "selected";} ?>>Presente</option>
                            <option value="A" <?php if($row['asistencia']=='A'){echo "selected";} ?>>Ausente</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>
           
  	     	 		 

  	     	 	
						

            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">      
                    <div class="form-group">
                    <a href="lista_asistencia.php" class="btn btn-danger">Atrás</a>
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