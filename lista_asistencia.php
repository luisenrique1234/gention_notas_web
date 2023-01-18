<?php
include('php/admin_pcabesa.php');
?>

<!--mijas de pan -->
<ol class="breadcrumb">
	
<li><a  href="admin-index.php"> Inicio</a>	</li>
<li class="active">lista de Asistencia </li>	

</ol>

<!-- fin de la segunda parte-->
<div class="panel panel-defaul">
	
	<div class="panel-heading">
		<h1> Listado de Asistencia</h1>
		<div class="panel-body"> 
			<p>
				<a href="crea_asistencia.php" class="btn btn-success pull-letf">NUEVO</a>
			</p>
			<br>
			<hr>
			<table class="table table-striped" style="text-align: center;">
				<thead>
					<tr> <!-- fila-->
						<th>Codigo</th> <!--th colunma--> 
						<th>Nombre</th>
						<th>Grupos</th>
						<th>Asistencia</th>
						<th>Fecha</th>
						<th>Estado</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				

				<tbody>
        <?php
        $query=lista_asistencia();
        while ($row= $query->fetch_assoc() ){
            echo"
            <tr>
            <td>".$row["id_asis"]."</td>
			<td>".$row["nombre"]."</td>
			<td>".$row["nombre_grupos"]."</td>
			<td>".$row["asistencia"]."</td>
			<td>".$row["fecha"]."</td>
            <td>".$row["estado"]."</td>
            <td>
            <a href='actualizar_asist.php?id=".$row["id_asis"]."' class='btn btn-primary'>Editar</a>
            <a href='php/asistencia_registro.php?accion=DLT&id=".$row["id_asis"]."' class='btn btn-danger' onclick='return alertaeliminar();'>Desactivar</a>
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


<!--este sript es una prueva de las alertas echo con duce alertas y tambien con
direccion de un carpera donde esta el codigo -->
<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
<!--<script src="js/sweealerta.js"></script>!-->


<script>

	function alertaeliminar(){

		var respuesta = confirm ("Estas seguro de Desactivar a este alumno");
		
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
