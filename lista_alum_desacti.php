<?php
include('php/admin_pcabesa.php');
?>

<!--mijas de pan -->
<ol class="breadcrumb">
	
<li><a  href="admin-index.php"> Inicio</a>	</li>
<li><a href="lista_asistencia.php">Listado de Asistencia</a></li>
<li class="active">lista de Alumnos </li>	

</ol>

<!-- fin de la segunda parte-->
<div class="panel panel-defaul">
	
	<div class="panel-heading">
		<h1> Listado de Alumnos de Desactivado</h1>
		<div class="panel-body"> 
			
			<br>
			<hr>
			<table class="table table-striped" style="text-align: center;">
				<thead>
					<tr> <!-- fila-->
						<th>Codigo</th> <!--th colunma--> 
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Sexo</th>
						<th>Fecha</th>
						<th>Email</th>
						<th>Direccion</th>
						<th>Telefono</th>
						<th>Estado</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				

				<tbody>
        <?php
        $query=lista_alumnosdesactivado();
        while ($row= $query->fetch_assoc() ){
            echo"
            <tr>
            <td>".$row["id_alum"]."</td>
			<td>".$row["nombre"]."</td>
			<td>".$row["apellido"]."</td>
			<td>".$row["sexo"]."</td>
			<td>".$row["fecha_alum"]."</td>
			<td>".$row["email"]."</td>
			<td>".$row["direccion"]."</td>
			<td>".$row["telefono"]."</td>
            <td>".$row["estado"]."</td>
            <td>
            
            <a href='php/alumno_regidesactivar.php?accion=ACT&id=".$row["id_alum"]."' class='btn btn-success pull-letf' onclick='return alertaactivar();'>Activar</a>
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

	function alertaactivar(){

		var respuesta = confirm ("Estas seguro de Activar a este alumno");
		
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
