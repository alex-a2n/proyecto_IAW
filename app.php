<?php
    session_start();
    $_SESSION['nombre'] = $_REQUEST['usuario'];
    $_SESSION['clave'] = $_REQUEST['clave'];
    echo "Nombre guardado";
?>