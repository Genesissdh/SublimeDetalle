<?php
include_once('./include/conexion.php');
include_once('./include/consultas.php');

if (!empty($_POST)) {
    # code...
    $usuario = htmlspecialchars($_POST['usuario']);
    $password = htmlspecialchars($_POST['password']);
    // $password = sha1($password);

    validarLogin($link, $usuario, $password);
}
    

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sublime Detalle</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="main.css" type="text/css">

    <!-- FontAwesone -->
    <link rel="stylesheet" href="./package/fontawesome-free-5.13.0-web/css/all.min.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="./package/bootstrap-4.5.0-dist/css/bootstrap.min.css">


    <!-- JQuery -->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        .login-container {
            margin-top: 15%;
            max-width: 100%;
		}
		
		.form-login {
            width:  400px;
            background: rbg(0,0,0,0);
            padding: 50px;
            margin: auto;
            border-radius: 4px;
            color: black;
            box-shadow: 7px 13px 37px #F00782;
            border-radius: 20px;
        }
    </style>

    
</head>
<body>

    <div class="sidenav">
         <div class="login-main-text">
            <h2><img src="./img/sublimed.png" width="500" height="150"></h2>
         </div>
      </div>
      <div class="main">
          <!-- Formulario de login-->
<br>
<article class="container login-container">
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" class= "form-login" method="post" enctype="multipart/form-data">
        <h2 class="text-center"><a href="./index.php"><img src="./img/sublime.png" width="35" height="35" alt="Logo Empresa"></a> <b>Iniciar Sesión</b></h2>
        <p class="text-center">Ingresa en tu cuenta personal</p>
        <hr class="colorgraph">
        <br>
        <label><i class="fas fa-user "  ></i><b> Nombre de usuario:</b></label>
        <div class="form-group input-group">
            <input type="text" name="usuario" id="usuario" class="form-control input-lg" placeholder="Ingrese su usuario" tabindex="4" required=""> 			
        </div>
        <label><i class="fas fa-lock " ></i><b> Contraseña:</b></label>
		<div class="form-group input-group">
			<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Ingrese su contraseña" tabindex="2" required=""> 
        </div>
        <p class="text-center">¿No tienes una cuenta? <a href="./registro.php">Regístrate</a> </p> 
        <hr class="colorgraph">
        <input type="submit" value="Iniciar sesión" class="btn btn-success btn-block btn-lg"></div>
    </form>
	</div>
</article>