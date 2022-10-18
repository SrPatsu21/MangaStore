<?php
    include "header.php";

    require_once "src/produtoDAO.php"
?>

<?php

    $produtoDAO = new produtoDAO;

    $produtoDAO->editar($_POST);
?>
    <div style="height: 75vh;" class="d-flex flex-column mb-3 justify-content-center">

        <div class="d-flex justify-content-center">
        <div>
        <p>Dados Editados com sucesso!</p>
        </div>

        </div>

        <div class="d-flex justify-content-center">
            <div><a href="indexAdmin.php">voltar</a></div>
        </div>

    </div>
   
    


<?php
include "footer.php";
?>
</html>