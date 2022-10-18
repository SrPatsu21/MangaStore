<?php
    require_once "src/produtoDAO.php";

    $produtoDAO = new produtoDAO;

    $produtoDAO->cadastrar($_POST);

    header("Location:cadastrarManga.php?msg=1");
?>