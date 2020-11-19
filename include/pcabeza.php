<?php
    
    // incluimos conexion
    include_once("./include/conexion.php");
    include_once("./include/consultas.php");
    
    
    if (isset($_SESSION['Id_usuario'])) {
        # code...
        $idusuario = $_SESSION['Id_usuario'];
        $row = consultarUsuarios($link, $idusuario);
        

    } 
    else {
        # code...
        $_SESSION['mensajeTexto'] = "Error Acceso al Sistema no Registrado";
        $_SESSION['mensajeTipo'] = "alert-danger";
        header("Location: login.php");
        
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
    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    

    <!-- Boostrap -->
    <link rel="stylesheet" href="./package/bootstrap-4.5.0-dist/css/bootstrap.min.css">

    <!-- FontAwesone -->
    <link rel="stylesheet" href="./package/fontawesome-free-5.13.0-web/css/all.min.css">

    <!-- JQuery -->
    <script src="./js/jquery-3.5.1.min.js"></script>

    <!-- Datable-->
    <link rel="stylesheet" href="./package/DataTables/datatables.min.css">

   
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>


    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="./shop-cart.php"><span class="icon_bag_alt"></span>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="./img/loogo.png" width="200" height="60" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <small><i class="fas fa-user " style="color:#F00782" ></i> <?php echo $row['Usuario'];?>/</small>
            <a href="./include/cerrar.php"><i class="fas fa-sign-out-alt" style="color:#F00782"></i> Cerrar sesión</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->


<!-- Header Section Begin -->
<nav class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="./index.php"><img src="./img/loogo.png" width="200" height="60" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <center>
                        <ul>
                            <!-- Menú -->
                            <li><a href="./index.php">Inicio</a></li>
                            <li><a href="./catalogo.php">Catálogo</a>
                                <ul class="dropdown">
                                    <li><a href="#">Tazas</a></li>
                                    <li><a href="#">Termos</a></li>
                                    <li><a href="#sueter">T-shirts y Textiles</a></li>
                                    <li><a href="#">Mascarillas</a></li>
                                    <li><a href="#">Gorras</a></li>
                                    <li><a href="#">Regalos</a></li>
                                </ul>
                            </li>
                            <li><a href="./shop-cart.php">Carrito de compras</a></li>
                            <li><a href="./contacto.php">Contacto</a></li>
                        </ul>
                        </center>
                    </nav>
                </div>
            <div class="col-lg-3">
                <div class="header__right">
                    <div class="header__right__auth">
                        <small><i class="fas fa-user " style="color:#F00782" ></i> <?php echo $row['Usuario'];?>/</small>
                        <a href="./include/cerrar.php"><i class="fas fa-sign-out-alt" style="color:#F00782"></i> Cerrar sesión</a>
                    </div>
                    <ul class="header__right__widget">
                        <li><span class="icon_search search-switch"></span></li>
                        <li><a href="./shop-cart.php"><span class="icon_bag_alt"></span>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</nav>

<!-- Header Section End -->
