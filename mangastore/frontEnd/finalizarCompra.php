<?php
    include "header.php";
    require_once "src/CompraDAO.php";

    $compraDAO = new CompraDAO();
    $compraDAO->registrarCompra($_SESSION);

?>

<h1>sua compra foi realizada</h1>

<?php
    include "footer.php"
?>