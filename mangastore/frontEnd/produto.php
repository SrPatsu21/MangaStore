<?php
$title = "produto";
include "header.php";
if (isset($_GET['id'])) {
    $produto = $produtoDAO->consultarPorID($_GET['id']);
}
if (!isset($produto['nome'])) {
?>
 <main class="container t100 d-flex justify-content-cente mb-4" style="height: 85vh;">
 <p class="mt-5 fs-1">PRODUTO NÃO EXISTE OU NÃO PODE SER ENCONTRADO</p>
 </main>
<?php
} else{
?>
    
    <main class="container t100 d-flex justify-content-cente mb-4" style="min-height: 85vh;">
        <div class="container d-flex flex-column mt-3 h100 p-1 rounded bg-cardBoder">
                <div>
                    <form action="funcaoCarrinho.php" method="post">
                    <input type="hidden" name="operacao" value="adicionar">
                    <input type="hidden" name="idproduto" value="<?=$produto['idprodutos']?>">
                    <input type="hidden" name="lastUri" value="<?=$_SERVER['REQUEST_URI']?>">
                        <div class="d-flex justify-content-between align-items-stretch h100">

                            <img class="imgCardProduto bg-gray2 t4975 h100 p-2 rounded" src="data:image/png;base64,<?=base64_encode($produto['imagem'])?>" alt="Imagem de capa do card">
                            <div class="d-flex flex-wrap t4975 bg-gray2 rounded flex-column">
                                        <div class="t100">
                                            <p class="fs-5 fw-bold m-1 overflow-auto bd-highlight text-break text-uppercase" style="width: 100%; height:3rem;"><?= $produto["nome"]?></p>
                                            <p class="fs-7 fw-bold m-1">volume:<?= $produto['volume']?></p>
                                            <p class="fs-7 fw-bold m-1">Valor: R$<?=number_format($produto['valor'], 2, ",", ".")?></p>
                                            <p class="fs-7 fw-bold m-1">Descrição:</p>
                                            <p class="fs-7 m-1 overflow-auto bd-highlight text-break" style="width: 100%; max-height: 15.2rem;"><?= $produto["descricao"]?></p>
                                        </div>
                                        
                                        <div class="t100 mt-auto">
                                            <div class="pe-2 ps-2 align-items-center d-flex justify-content-between align-items-center t100 mb-auto" style="height: 3rem;">
                                            <button type="submit" class="t100 d-flex justify-content-center align-items-center  ms-2 rounded-3 text-decoration-none text-uppercase buttonRed p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center ">ADD ao carrinho</p></button>
                                        </div>
                             </div>
                            </div>
                    </form>
                </div>

            </div>
    </main>

<!-- footer -->
<?php
}
include "footer.php";
?>
</html>