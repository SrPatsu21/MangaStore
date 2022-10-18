<?php

    session_start();


    if (!isset($_SESSION['login'])) {
        header("location:LoginAdmin.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <!-- CSS only -->

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">



    </head>

<!-- fim do head -->

    <body class="bg-gray text-light">

        <header style="height: 15vh">

            <nav class="bg-dgd pt-2 pb-2 t100 d-flex justify-content-between">

                <div class="t100 d-flex justify-content-between">

                        <div class="d-flex align-items-center ms-5 t34">
                            
                            <a href="indexAdmin.php" class="fs-1 fw-strong text-uppercase logofamily text-decoration-none link-light"><img src="../img/principal/logoanimestore.png" alt="" class="logo m-1">mangastore</a>
                        </div>
                        
                        <div class="t20 bg-primary rounded-2 d-flex align-items-center justify-content-center m-3">
                            <a href="consultar.php" class="link-light text-decoration-none t100 text-center">Consultar</a>
                        </div>
                        <div class="t20 bg-primary rounded-2 d-flex align-items-center justify-content-center m-3">
                            <a href="cadastrarManga.php" class="link-light text-decoration-none t100 text-center">Cadastrar Manga</a>
                        </div>
                        <div class="t20 bg-primary rounded-2 d-flex align-items-center justify-content-center m-3">
                            <a href="cadastrarAdmin.php" class="link-light text-decoration-none t100 text-center">Cadastrar Admin</a>
                        </div>

                        <div class="t20 bg-primary rounded-2 d-flex align-items-center justify-content-center m-3">
                            <a href="logout.php" class="link-light text-decoration-none t100 text-center">Logout</a>
                        </div>
                </div>

            </nav>
        </header>
        <main class="d-flex justify-content-center t100 align-items-center" style="height:85vh">
