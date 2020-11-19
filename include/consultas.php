<?php

function mostrarArticulo($link)
{
    $query = "SELECT * FROM `articulo`";
    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function mostrarPedido($link)
{
    $query = "SELECT
    c.Nombre,
    c.Apellido,
    p.id_pedido,
    p.Fecha_pedido,
    p.Comentario,
    p.estado_pedido
FROM
    cliente AS c
    INNER JOIN pedido AS p ON c.id_cliente = p.Cliente_id_cliente";
    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function mostrarUsuarios($link)
{
    $query = "SELECT * FROM `usuario`";
    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function mostrarClientes($link)
{
    $query = "SELECT * FROM `cliente`";
    $resultado = mysqli_query($link, $query);

    return $resultado;
}


function mostrarClientee($link)
{
    $query = "SELECT 
    * 
    FROM `cliente` a, `usuario` b,`tipo_acceso` c
    WHERE a.Id_usuario = b.Id_usuario
    and b.Id_tipo_acceso=c.Id_tipo_acceso";

    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function mostrarPedidos($link)
{
    $query = "SELECT * FROM `pedido`";
    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function mostrarCatArticulo($link)
{
    $query = "SELECT * FROM `categoria_articulo`";
    $resultado = mysqli_query($link, $query);

    return $resultado;
}
function mostrarproveedor($link)
{
    $query = "SELECT * FROM `proveedor`";
    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function mostrarRol($link)
{
    $query = "SELECT * FROM `rol_empleado`";
    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function mostrarTipo($link)
{
    $query = "SELECT * FROM `tipo_acceso`";
    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function consultarClientes($link, $id)
{
    $query = "SELECT * FROM `cliente` WHERE `Id_cliente` = '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarUsuarios";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./clientes_mant.php");
    }
}

function consultarArticulos($link, $id)
{
    $query = "SELECT * FROM `articulo` WHERE `Id_articulo` = '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarUsuarios";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./articulo_mant.php");
    }
}

function consultarPedidos($link, $id)
{
    $query = "SELECT * FROM `pedido` WHERE `id_pedido` = '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarUsuarios";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./clientes_mant.php");
    }
}

function consultarUsuarios($link, $id)
{
    $query = "SELECT * FROM `usuario` WHERE `Id_usuario` = '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarUsuarios";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./clientes_mant.php");
    }
}

function consultarCatArticulo($link, $id)
{
    $query = "SELECT * FROM `categoria_articulo` WHERE `Id_categoria_articulo` = '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarUsuarios";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./cat_articulo_mant.php");
    }
}

function consultarProveedor($link, $id)
{
    $query = "SELECT * FROM `proveedor` WHERE `id_proveedor` = '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarProveedor";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./proveedor_mant.php");
    }
}

function consultarRol($link, $id)
{
    $query = "SELECT * FROM `rol_empleado` WHERE `Id_rol_empleado` = '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarRol";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./proveedor_mant.php");
    }
}
function consultarTipo($link, $id)
{
    $query = "SELECT * FROM `tipo_acceso` WHERE `Id_tipo_acceso` = '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> Consultaracceso";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./tipo_acceso_mant.php");
    }
}


function consultarCliente($link, $id)
{
    $query = "SELECT 
    * 
    FROM `cliente` a, `usuario` b,`tipo_acceso` c
    WHERE a.Id_usuario = b.Id_usuario
    and b.Id_tipo_acceso=c.Id_tipo_acceso
    and a.Id_cliente = '$id'";

    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarMantenimiento";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./cliente_mant.php");
    }
}
function consultarEmpleados($link, $id)
{
    $query = "SELECT 
    a.Id_empleado,
    a.Nombre,
    a.Id_usuario,
    a.Id_rol_empleado,
    a.Apellido,
    a.Sexo,
    a.Fecha_nacimiento,
    a.Estado_empleado,
    b.Usuario,
    c.Nombre as Rol
    FROM `empleado` a, `usuario` b,`rol_empleado` c
    WHERE a.Id_usuario = b.Id_usuario
    and a.Id_rol_empleado=c.Id_rol_empleado
    and a.Id_empleado = '$id'";

    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarMantenimiento";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./empleados_mant.php");
    }
}

function mostrarEmpleado($link)
{
    $query = "SELECT a.Id_empleado,
    a.Nombre,
    a.Id_usuario,
    a.Id_rol_empleado,
    a.Apellido,
    a.Sexo,
    a.Fecha_nacimiento,
    a.Estado_empleado,
    b.Usuario,
    c.Nombre as Rol
    FROM `empleado` a, `usuario` b,`rol_empleado` c
    WHERE a.Id_usuario = b.Id_usuario
    and a.Id_rol_empleado=c.Id_rol_empleado";

    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function consultarUsuario($link, $id)
{
    $query = "SELECT 
    a.Id_usuario, 
    a.Id_tipo_acceso, 
    b.Nivel,
    a.Usuario,
    a.Password, 
    a.Estado_usuario  
    FROM `usuario` a, `tipo_acceso` b
    WHERE a.Id_tipo_acceso = b.Id_tipo_acceso
    and a.Id_usuario = '$id'";

    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarMantenimiento";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./usuarios_mant.php");
    }
}
function mostrarUsuario($link)
{
    $query = "SELECT 
    a.Id_usuario, 
    a.Id_tipo_acceso, 
    b.Nivel,
    a.Usuario,
    a.Password, 
    a.Estado_usuario
    FROM `usuario` a, `tipo_acceso` b
    WHERE a.Id_tipo_acceso = b.Id_tipo_acceso";

    $resultado = mysqli_query($link, $query);

    return $resultado;
}

function consultarArticulo($link, $id)
{
    $query = "SELECT 
    a.Id_articulo, 
    a.Proveedor_id_proveedor, 
    a.Categoria_articulo_id_categoria_articulo, 
    b.Nombre as Proveedor,
    c.Nombre as Categoria,
    a.Nombre,
    a.Descripcion, 
    a.Precio_unidad, 
    a.Itbis, 
    a.Precio_total, 
    a.Envio, 
    a.Stock, 
    a.Estado_articulo  
    FROM `articulo` a, `Proveedor` b,`Categoria_articulo` c
    WHERE a.Proveedor_id_proveedor = b.id_proveedor
    and a.Categoria_articulo_id_categoria_articulo = c.Id_categoria_articulo
    and a.Id_articulo = '$id'";

    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        // echo("Alerta 0001: Registro Insertado en la Base de Datos");
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> ConsultarMantenimiento";
        $_SESSION['mensajeTipo'] = "alert-danger";

        header("Location: ./articulos_mant.php");
    }
}


function mostrarArticulos($link)
{
    $query = "SELECT 
    a.Id_articulo, 
    a.Proveedor_id_proveedor, 
    a.Categoria_articulo_id_categoria_articulo, 
    b.Nombre as Proveedor,
    c.Nombre as Categoria,
    a.Nombre,
    a.Descripcion, 
    a.Precio_unidad, 
    a.Itbis, 
    a.Precio_total, 
    a.Envio, 
    a.Stock, 
    a.Estado_articulo  
    FROM `articulo` a, `Proveedor` b,`Categoria_articulo` c
    WHERE a.Proveedor_id_proveedor = b.id_proveedor
    and a.Categoria_articulo_id_categoria_articulo = c.Id_categoria_articulo";

    $resultado = mysqli_query($link, $query);

    return $resultado;
}


function validarLogin($link, $user, $pass)
{

    $query = "SELECT * FROM `usuario` WHERE `Usuario` = '$user' AND `Password` = '$pass' AND `Estado_usuario` = 'A'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        # code...
        $row = $resultado->fetch_assoc();
        $_SESSION['Id_usuario'] = $row['Id_usuario'];
        if ($row['Id_tipo_acceso'] == 1) {
            header("Location: admin.php");
        } else {
            header("Location: index.php");
        }
    } else {
        # code...
        $_SESSION['mensajeTexto'] = "Error Consultando Datos -> validarLogin";
        $_SESSION['mensajeTipo'] = "alert-danger";
    }
}
