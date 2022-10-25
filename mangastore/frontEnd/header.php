<?php 

session_start();


require_once "src/produtoDAO.php";


$produtoDAO = new produtoDAO();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">


    </head>

<!-- fim do head -->

    <body class="bg-gray text-light bodyIP" id="bodyIp">

        <header>
 
            <nav class="bg-dgd pt-2 pb-2">
                <div class="t100 d-flex justify-content-between">

                    <div class="d-flex align-items-center ms-5 t34">
                        <a href="main-page.php" class="buttonsWhite fs-1 fw-strong text-uppercase logofamily text-decoration-none bg-transparent border-0"><img src="../img/principal/logoanimestore.png" alt="" class="logo m-1">mangastore</a>
                    </div> 

                    <div class="t33 d-flex align-items-center justify-content-center">

                    <form class="d-flex align-items-center justify-content-between t100 border border-light border-2 rounded-pill" action="pesquisa.php">
                        <input class="m-0 t90 bg-transparent text-light fw-bold ps-3 borderLeftWhite" type="search " name="nome" placeholder="PESQUISAR... " value="<?php if (isset($_GET['nome'])) {echo    $_GET['nome'];}else {echo '';}?>" aria-label="Search">
                        
                                    <select class="h100 bg-transparent borderLeftWhite" name="idgenero" id="idgenero">
                                          <?php
                                          require_once "src/GeneroDAO.php";
                                          $generoDAO = new generoDAO();

                                          $idsgenero = $generoDAO->consultarGeneros();
                                            echo "<option value=''>-generos-</option>";
                                          foreach($idsgenero as $genero){
                                            echo "<option value='{$genero['idgeneros']}'>{$genero['genero']}</option>";
                                          }
                                          ?>
                                    </select>

                        <button class="bg-transparent border-0 t10 d-flex align-items-center justify-content-center " type="submit"><img src="../img/principal/search.svg" class="" alt=""></button>
                    </form>

                    </div>

                    <div class="d-flex align-items-center justify-content-end me-5 t33">

                    <button onclick="xtroll()" class="buttonsWhite fs-4 fw-strong text-uppercase logofamily text-decoration-none bg-transparent border-0 me-2">troll</button>

                    <a href="carrinho.php"><img src="../img/principal/car.svg" alt="carrinho" class="icon me-3"></a>

                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../img/principal/person-fill.svg" alt="perfil" class="icon "></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                        <li><a class="dropdown-item" href="#footer">Ajuda</a></li>
                        <li><a class="dropdown-item" href="../admin/loginAdmin.php">Login Admin</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                        
                        </ul>
                    </li>

                    </div>

                </div>
            </nav>
        </header>