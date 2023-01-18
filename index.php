<!doctype html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="#" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio -EduTec</title>

    <link rel="shortcut icon" href="img/logo-b.png" type="image/x-icon">
    
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    
    <link rel="stylesheet" href="plugins/sweet_alert2/sweetalert2.min.css">
</head>
<body>
    <div id="login">
        
        <div class="container">                        
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                
           <div class="col-6 m-auto"  user-img> 
            <img src="img/logo-b.png"   width="100%">
           </div>
           
                    <div id="login-box" class="col-md-12  bg-light text-dark">
                        <form id="formLogin" class="form" action="" method="post">
                            <h3 class="text-center text-dark">Iniciar Sesión</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-dark">Usuario</label><br>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Password</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group text-center">                                
                                <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Conectar">
                                <a href="#"> Recuperar contrasena </a>
                                <h5 class="text-dark"><a href="crear_user.php"> Registro</a></h5>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="plugins/sweet_alert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script>
</body>
</html>