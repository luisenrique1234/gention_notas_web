<?php
include('php/admin_pcabesa.php');
?>

<!--mijas de pan -->
<ol class="breadcrumb">
	
<li><a  href="admin-index.php"> Inicio</a>	</li>
<li><a href="lista_asistencia.php">Listado de Asistencia</a></li>
<li class="active">lista de Bloque</li>	

</ol>

<!-- fin de la segunda parte-->
<div class="panel panel-defaul" style="margin top: 10px">
	
	<div class="panel-heading">
		<h1> Listado de Bloque</h1>
		<div class="panel-body"> 
			<p>
				<a href="crea_bloque.php" class="btn btn-success pull-letf">NUEVO</a>
			</p>
			<br>
			<hr>
			<table class="table table-striped" style="text-align: center;">
				<thead>
					<tr> <!-- fila-->
						<th>Codigo de Bloque</th> <!--th colunma--> 
						<th>Nombre</th>
						<th>Codgo Grupo</th>
						<th>Estado</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				

				<tbody>
        <?php
        $query=lista_bloque();
        while ($row = $query -> fetch_assoc() ){
            echo"
            <tr>
			<td>".$row["id_bloque"]."</td>
			<td>".$row["nombre_bloque"]."</td>
			<td>".$row["id_grupos"]."</td>
			<td>".$row["estado"]."</td>
            <td>
            <a href='actualizar_bloque.php?id=".$row["id_bloque"]."' class='btn btn-primary'>Editar</a>
            <a href='php/bloque_registro.php?accion=DLT&id=".$row["id_bloque"]."' class='btn btn-danger' onclick='return alertaeliminar();'>Desactivar</a>
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

		var respuesta = confirm ("Estas seguro de Desactivar este Bloque");
		
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
