<?php
    include './php/admin_pcabesa.php';
	$query=extraergrupoUTD($_GET['id']);
	
    $row=$query->fetch_assoc();

?>

<!-- segunda parte -->
<ol class="breadcrumb">
         <li><a href="admin-index.php">Inicio</a></li>
         <li><a href="lista_grupos.php">Listado de Grupos</a></li>
         <li class="active">Nueva Grupo</li>
    </ol>

  <div class="panel-dafault" style="margin-top: 10px" > <!--panel de crear --> 
  	   <div class="panel-heading"> 
			  <h1>Actualizar Grupo</h1>  
			  
    </div>
    <div class="panel-body">
        <form action="./php/grupos_registro.php?accion=UDT" method="POST">
           
        <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Codigo Grupo<span style="color:red">*</span> </label>
                        <input type="text" name="codigo" require="" placeholder="codigo" class="form-control" readonly="" value="<?php echo $row['id_grupos']?>">
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

            <div>
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-0 col-lg-2 col-lg-offset-2 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group" class="alert alert-danger" role="alert">
  	     	 		 		<label class="control-label">Nombre de Grupo<span style="color: Red">*</span></label>
  	     	 		 		<input type="text" name="grupo" required="" placeholder="Materia" class="form-control" value="<?php echo $row['nombre_grupos']?>">
  	     	 		 	</div>
  	     	 		 </div>
           
           
  	     	 		

  	     	 	<!-- tercera parte
  	     	 	<div class="row">
  	     	 		<div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-0 col-xs-12 col-xs-offset-0">
  	     	 		 	<div class="form-group">
  	     	 		 		<label class="control-label">Codigo del alumno<span style="color: Red">*</span></label>
  	     	 		 		<input type="tel" name="codalum" required="" placeholder="Codigo del alumno" class="form-control" value="<?php echo $row['id_user']?>">
  	     	 		 	</div>
  	     	 		 </div> -->
  	     	 		
						

            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">      
                    <div class="form-group">
                    <a href="lista_grupos.php" class="btn btn-danger">Atrás</a>
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