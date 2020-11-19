<?php
include_once("./include/pcabeza_admin2.php");
$resultado = mostrarPedido($link);
?>


    <!--Ejemplo tabla con DataTables-->
    <div id="layoutSidenav_content">
    <main><br>
            <header>
                <img style="float: left; margin: 0px 0px 45px 45px;" src="./img/syblime.png" align="center" width="70" height="70">
                <h1 class="text-center text-black">Reporte General de Pedidos Realizados</h1>
                <i>
                    <h4 class="text-center text-black">Sublime Detalle</h4>
                </i>
            </header>
    <div class="container-fluid">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Fecha del Pedido</th>
                                <th scope="col">Comentario</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($resultado)) { ?>
                                <tr>
                                    <td> <?php echo $row['id_pedido'] ?> </td>
                                    <td> <?php echo $row['Nombre'] . ' ' . $row['Apellido'] ?> </td>

                                    <td> <?php $fechaoriginal = $row['Fecha_pedido'];
                                            $nuevafecha = date("d/m/Y H:i:s", strtotime($fechaoriginal));
                                            echo $nuevafecha ?> </td>
                                            
                                    <td> <?php echo $row['Comentario'] ?> </td>
                                    <td> <?php if ($row['estado_pedido'] == 'A') {
                                                echo 'Activo';
                                            } else {
                                                echo 'Inactivo';
                                            } ?> </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>

    <!-- para usar botones en datatables JS -->
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>

    <!-- código JS propìo-->
    <script type="text/javascript" src="main.js"></script>
    <script src="js/scripts.js"></script>

<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2019</div>
        </div>
    </div>
</footer>
			
       
       


</body>

</html>