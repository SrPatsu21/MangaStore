<?php
    $title = "Cadastro Feito! :)";
    include "header.php";

    require_once "../src/produtoDAO.php"
?>

<?php

    $produtoDAO = new produtoDAO;

    $produtoDAO->cadastrar($_POST);

?>
    <div class="d-flex flex-column mb-3 justify-content-center">

        <div class="d-flex justify-content-center">
        <div>
        <p>Dados cadastrados com sucesso!</p>
        </div>

        </div>

        <div class="d-flex justify-content-center">
            <div><a href="cadastrarManga.php">voltar</a></div>
        </div>

    </div>

<?php
include "../footer.php";
?>

</html>