<?php
include('consultas.php');
include('consultas_desactivado.php');


session_start();

//Si nadie inció sesión vuelve a la pag de Login
if ($_SESSION["s_usuario"] === null){
	header("Location: ./index.php");
}else{
    if($_SESSION["s_idRol"]!=1){
        header("Location: pag_error.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" >
  <title>EduTec</title>

  <!-- CSS de Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Cargar Fuentes -->
  <script defer src="fonts/fontawesome/js/all.js"></script>
  
 

  <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link rel="shortcut icon" href="img/iconos/favicon.ico" type="image/x-icon">
  <!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/logo-b.png" type="image/x-icon">

  <!-- ALERTAS DE CONFIRMACION -->
  <link rel="stylesheet" href="css/jquery-confirm.min.css">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jquery-confirm.min.js"></script>
  <!-- FIN DE ALERTAS -->

</head>

<body>
  <nav class="navbar navbar"  style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div>
        
        <a class="navbar-brand" href="admin-index.php">
          <table align ="center" width="100%" style="margin-top: -10px">
            <tr>
              <td>
                <img src="img/logo-b.png" alt="Logo" width="50px" style="margin-right: 10px; border-radius: 80%;" />
              </td>
              <td>
                <span>EduTec</span>
              </td>
            </tr>
          </table>
        </a>

      </div>

     
      

     

        <ul class="nav navbar-nav">
          <!-- Componentes del Menu -->
          
          <i class="glyphicon glyphicon-user"></i>
          <li>
          <a class="navbar-brand " href="lista_alumnos.php">Alumnos</a>
          
          
          </li>
          
        </ul>

        

        

        <ul class="navbar-brand">
        <!-- icono de comida--> 
          <i class="bi bi-award" ></i>
        </ul>


        <ul class="nav navbar-nav">
          <!-- Componentes del Menu -->
          <li>
          <a class="navbar-brand" href="lista_califi.php">Calificaciones</a>
          </li>
        </ul>

 

        <ul class="navbar-brand">
        <!-- icono de comida--> 
          <i class="fas fa-concierge-bell" ></i>
        </ul>

        

        <ul class="nav navbar-nav">
          <!-- Componentes del Menu -->
          <li>
          <a class="navbar-brand" href="lista_grupos.php">Grupos</a>
          </li>
        </ul>

        <ul class="navbar-brand">
        <!-- icono de comida--> 
          <i class="fas fa-concierge-bell" ></i>
        </ul>

        

        <ul class="nav navbar-nav">
          <!-- Componentes del Menu -->
          <li>
          <a class="navbar-brand" href="lista_bloque.php">Bloque</a>
          </li>
        </ul>
        
        <ul class="nav navbar-nav">
          <!-- Componentes del Menu -->
          <li>
          <a class="navbar-brand" href="lista_alum_desacti.php">Alumnos de Desactivado  </a>
          </li>
        </ul>
         
        

    <span>

        <ul class="nav navbar-nav">
          <h3 class="text-center">Usuario: <span style="background-color: #61f355;"><?php echo $_SESSION["s_usuario"];?></span></h3>

        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li><a class="bg-danger" href="./bd../logout.php" onclick="return alertaactivar();" role="button" >Cerrar Sesión</a></li>
        </ul>
    </span>

        

      </div>
      
      
      <!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    
    
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
  
  
  