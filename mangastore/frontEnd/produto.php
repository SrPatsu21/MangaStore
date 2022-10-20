<?php
$title = "produto";
include "header.php";
if (isset($_GET['id'])) {
    $produto = $produtoDAO->consultarPorID($_GET['id']);
}
if (!isset($produto['nome'])) {
?>
 <main class="container t100 d-flex justify-content-cente mb-4" style="height: 85vh;">
 <p class="mt-5 fs-1">produto nao existe ou nao pode ser encontrado</p>
 </main>
<?php
} else{
?>
    
    <main class="container t100 d-flex justify-content-cente mb-4" style="min-height: 85vh;">
        <div class="container d-flex flex-column bg-light mt-3 h100">
                <div>
                        <div class="d-flex justify-content-between align-items-stretch h100">

                            <img class="imgCardProduto bg-gray2 t495 h100 p-2 rounded" src="data:image/png;base64,<?=base64_encode($produto['imagem'])?>" alt="Imagem de capa do card">
                            <div class="d-flex flex-wrap t495 bg-gray2 rounded">
                                    <div class="t100">
                                        <div class="t100">
                                            <p class="fs-5 fw-bold m-1 overflow-auto bd-highlight text-break text-uppercase" style="width: 100%; height:3rem;"><?= $produto["nome"]?></p>
                                            <p class="fs-7 fw-bold m-1">volume:<?= $produto['volume']?></p>
                                            <p class="fs-7 fw-bold m-1">Valor: R$<?=number_format($produto['valor'], 2, ",", ".")?></p>
                                            <p class="fs-7 fw-bold m-1">Descrição:</p>
                                            <p class="fs-7 m-1 overflow-auto bd-highlight text-break" style="width: 100%; height: 5.2rem;"><?= $produto["descricao"]?></p>
                                        </div>
                                        
                                        <div class="my-auto"></div>

                                        <div>
                                            <div class="pe-2 ps-2 align-items-center d-flex justify-content-between align-items-center t100 mb-auto" style="height: 3rem;">
                                            <a href="#" class="t100 d-flex justify-content-center align-items-center  ms-2 rounded-3 text-decoration-none text-uppercase buttonRed p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center ">ADD ao carrinho</p></a>
                                            </div>
                                        </div>
                             </div>
                            </div>
                </div>

            </div>
    </main>

<!-- footer -->
<?php
}
include "footer.php";
?>
</html>