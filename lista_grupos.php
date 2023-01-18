<?php
include('php/admin_pcabesa.php');
?>

<!--mijas de pan -->
<ol class="breadcrumb">
	
<li><a  href="admin-index.php"> Inicio</a>	</li>
<li><a href="lista_asistencia.php">Listado de Asistencia</a></li>
<li class="active">lista de Grupos</li>	

</ol>

<!-- fin de la segunda parte-->
<div class="panel panel-defaul">
	
	<div class="panel-heading">
		<h1> Listado de Grupos</h1>
		<div class="panel-body"> 
			<p>
				<a href="crea_grupos.php" class="btn btn-success pull-letf">NUEVO</a>
			</p>
			<br>
			<hr>
			<table class="table table-striped" style="text-align: center;">
				<thead>
					<tr> <!-- fila-->
						<th>Codigo de Grupos</th> <!--th colunma--> 
						<th>Grupos</th>
						<th>Nombre de Alumnos</th>
						<th>Apelliddo</th>
						<th>Estado</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				

				<tbody>
        <?php
        $query=lista_grupos();
        while ($row = $query -> fetch_assoc() ){
            echo"
            <tr>
			<td>".$row["id_grupos"]."</td>
			<td>".$row["nombre_grupos"]."</td>
			<td>".$row["nombre"]."</td>
			<td>".$row["apellido"]."</td>
			<td>".$row["estado"]."</td>
            <td>
            <a href='actualizar_grupo.php?id=".$row["id_grupos"]."' class='btn btn-primary'>Editar</a>
            <a href='php/grupos_registro.php?accion=DLT&id=".$row["id_grupos"]."' class='btn btn-danger ' onclick='return alertaeliminar();'>Desactivar</a>
            </td>
            </tr>
            ";
        }
        ?>
    </tbody>
			</table>


		</div>
		
	</div>
</div>



<script>

	function alertaeliminar(){

		var respuesta = confirm ("Estas seguro de Desactivar esta Grupo");
		
		if (respuesta == true)
		{
			return true;
		}
		else
		{
			
			return false;

		}

	
}

</script>

<?php
include('php/admin_ppie.php');
?>
