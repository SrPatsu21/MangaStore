<?php

    session_start();

    require_once "src/UsuarioDAO.php";

    $usuarioDAO = new UsuarioDAO();

    if($usuarioDAO->provarLogin($_POST)){
        $_SESSION['login'] = $_POST['login'];
        header("Location:IndexAdmin.php");
    }else{
        header("Location:loginAdmin.php?msg=1");
    }


?>