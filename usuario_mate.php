<?php
include('php/user_consultas.php');

//Si nadie inció sesión vuelve a la pag de Login
if ($_SESSION["s_usuario2"] === null){
	header("Location: ./login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="#" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/sweet_alert2/sweetalert2.min.css">
    
    
    <title>Matematicas-EduTec</title>
    <link rel="shortcut icon" href="img/logo-b.png" type="image/x-icon">
</head>

<nav class="navbar navbar-expand-lg"style="background-color: #e3f2fd;" >
<img src="img/logo-b.png" alt="Logo" width="50px" style="margin-right: 10px; border-radius: 80%;" />
  <h5>EduTec</h5>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="usuario_espanol.php">Español<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usuario_mate.php">Matematica</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usuario_natu.php">Naturales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usuario_infor.php">Informatica</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="usuario_arte.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Arte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../lista_alum_desacti.php">lista de Alumnos Desativados</a>
          <a class="dropdown-item" href="#">Grupos Desativados</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Bloques Desativados</a>
        </div>
      </li>
    </ul>
    <ul class="form-inline my-2 my-lg-0">
    <h3 class="text-center">Usuario: <span style="background-color: #9cb2f8;"><?php echo $_SESSION["s_usuario2"];?></span></h3>
    </ul>
    <ul>
    <h5>
          <a class="btn btn-outline-danger" href="./bd../logout2.php" onclick="return alertaactivar();" role="button" >Cerrar Sesión</a>
    </h5>
    </ul>
  </div>
</nav>
<script>

	function alertaactivar(){

		var respuesta = confirm ("Estas seguro de Cerrar Sesion");
		
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


<!-- fin de la segunda parte-->
<div class="panel panel-defaul">
	
	<div class="panel-heading">
		<h1>Calificaciones Matematica</h1>
		<div class="panel-body"> 
			
			<br>
			<hr>
			<table class="table table-striped" style="text-align: center;">
				<thead>
					<tr> <!-- fila-->
						
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Materias</th>
						<th>notas</th>
						
						<th></th>
						<th></th>
					</tr>
				</thead>
				

				<tbody>
        <?php
        $query=lista_mate();
        while ($row = $query -> fetch_assoc() ){
            echo"
            <tr>
			<td>".$row["nombre"]."</td>
			<td>".$row["apellido"]."</td>
			<td>".$row["materia"]."</td>
			<td>".$row["valor"]."</td>
			
            <td>
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



<?php
include('php/admin_ppie.php');
?>
