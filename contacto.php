<?php
    include_once("./include/pcabeza.php");
?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.php"><i class="fa fa-home" style="color:#F00782"></i> Inicio</a>
                    <span>Contacto</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__content">
                    <div class="contact__address">
                        <h5>Información de contacto</h5>
                        <ul>
                            <li>
                                <h6><i class="fa fa-map-marker" style="color:#F00782"></i> Dirección</h6>
                                <p>Camagüey, Las Maras C/P #95</p>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone" style="color:#F00782"></i> Teléfono</h6>
                                <p><span>+1 (829) 355-0257</span>
                            </li>
                            <li>
                                <h6><i class="fa fa-headphones" style="color:#F00782"></i> Correo</h6>
                                <p>shg.diaz@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="contact__form">
                        <h5>Comentario</h5>
                        <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
                            <input type="text" placeholder="Usuario" required="" readonly onmousedown="return false;" value= <?php echo $row['Usuario'];?>>
                            <textarea placeholder="Comentario" required=""></textarea>
                            <button type="submit" class="site-btn">Enviar comentario</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-9">
                <div class="contact__map">
                    <img src="./img/direccion/direccion.PNG" width="780" style="border:0" allowfullscreen="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->


<?php
    include_once("./include/ppie.php");
?>