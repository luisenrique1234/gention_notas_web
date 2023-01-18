<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" >
        <title>Usuario alumno EduTec</title>
      
        <!-- CSS de Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      
        <!-- Cargar Fuentes -->
        <script defer src="fonts/fontawesome/js/all.js"></script>
       
       <!-- nuestro css -->
       <link rel="stylesheet" type="text/css" href="css/style.css">

       <link rel="shortcut icon" href="img/logo-b.png" type="image/x-icon">

       
        <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
      
        <link rel="shortcut icon" href="img/iconos/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/iconos/favicon.ico" type="image/x-icon">
      
        <!-- ALERTAS DE CONFIRMACION -->
        <link rel="stylesheet" href="css/jquery-confirm.min.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery-confirm.min.js"></script>
        <!-- FIN DE ALERTAS -->

         
</head>
<body>
    <div class="modal-dialog text-center" role="document">
     <div class="col-sm-12 main-selection"> 
       <div class="modal-content">
           <div class="col-12 m-auto" user-img> 
            <img src="img/logo-b.png" width="30%">
           </div> 
           <form class="col-12" action="php/loginBD.php"  method="POST">
            <div class="form-group" id="user-group" >
            <input type="text" name="user" class="form-control" placeholder="Usuario"/>
            </div>
            <div class="form-group" id="contrasena-group" >
            <input type="password" name="cont" class="form-control" placeholder="contrasena"/>
            </div>
            <button type="sumit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
            </form>
            <script src="alerta.js"></script>
           <div class="col-12"  forgot>
               <a href="#"> Recordar contrasena </a>
           </div>
       </div>
     </div>

    </div>
</body>
</html>