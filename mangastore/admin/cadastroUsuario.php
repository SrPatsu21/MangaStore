<?php
    require_once "src/UsuarioDAO.php";

    $usuarioDAO = new UsuarioDAO();
    //se senhas confere 
if (isset($_POST['login'])){
    if ($_POST['senha']== $_POST['senha2']) {

        if (!$usuarioDAO->consultarLogin($_POST['login'])){
        
            $usuarioDAO ->cadastrar($_POST);
        
            header("Location:cadastrarAdmin.php?msg=0");
        } else {
            header("Location:cadastrarAdmin.php?msg=1");
        }
        
    }else {
        header("Location:cadastrarAdmin.php?msg=2");
    }
}
?> 