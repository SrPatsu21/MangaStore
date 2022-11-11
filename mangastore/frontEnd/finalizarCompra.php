<?php
    include "header.php";
    require_once "src/CompraDAO.php";

    $compraDAO = new CompraDAO();
    $compraDAO->registrarCompra($_SESSION);

    header ("location: main-page.php?msg=1");
?>