<?php 
session_start();

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
    <link rel="stylesheet" href="css../style.css">
    
    
    <title>EduTec</title>
    <link rel="shortcut icon" href="../img../logo-b.png" type="image/x-icon">
</head>
<body>
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
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="jumbotron">
           <h1 class="display-4 text-center">Bienvenido</h1>
          <h2 class="text-center">Alumno: <span class="badge badge-success"><?php echo $_SESSION["s_usuario2"];?></span></h2>             
          <h2 class="text-center">Su permiso es: <span class="badge badge-primary"><?php echo $_SESSION["s_rol_descripcion2"];?></span></h2>  
          <hr class="my-4">          
          <a class="btn btn-danger btn-lg" href="bd/logout2.php" role="button">Cerrar Sesión</a>
        </div>
        </div>
    </div>
</div>    

        
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../jquery/jquery-3.3.1.min.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<script src="../plugins/sweet_alert2/sweetalert2.all.min.js"></script>
<script src="../codigo.js"></script>
</body>
</html>