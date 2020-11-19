<?php

    include_once("./include/conexion.php");

    if (isset($_GET['accion'])) {
        $opcion = $_GET['accion'];
    }else {
        $_SESSION['mensajeTexto'] = "Error identificando la opción";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./registro.php");
    }

    switch ($opcion) {
        // Para insertar
        case 'INS':
            if(isset($_POST['registrarse'])) {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];

                $query = "
                INSERT INTO `cliente`
                (`Nombre`, 
                `Apellido`, 
                `Direccion`,
                `Telefono`, 
                `estado_cliente`) 
                VALUES (
                '$nombre',
                '$apellido',
                '$direccion',
                '$telefono',
                'A')
                ";


                $resultado = mysqli_query($link, $query);

                if (!$resultado) {
                    // echo("Error 0001: Error Insertando Usuario en la Base de Datos");
                    $_SESSION['mensajeTexto'] = "Error Insertando en la Base de Datos";
                    $_SESSION['mensajeTipo'] = "alert-danger";

                    header("Location: ./registro.php");
                } else{
                    $query = "
                    INSERT INTO `usuario`
                    (`Usuario`, 
                    `Password`,
                    `Estado_usuario`,
                    `Id_tipo_acceso`) 
                    VALUES (
                    '$correo',
                    '$contrasena',
                    'A',
                    '2')
                    ";
                    $resultado = mysqli_query($link, $query);
                    // echo("Alerta 0001: Registro Insertado en la Base de Datos");
                    $_SESSION['mensajeTexto'] = "Se ha registrado existosamente.";
                    $_SESSION['mensajeTipo'] = "alert-success";
                    
                    header("Location: ./registro.php");

                }

            }
            break;
            
    }