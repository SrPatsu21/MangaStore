<?php
$title = "produto";
include "header.php";
$produto = $produtoDAO->consultarPorID($_GET['id']);
?>
    
    <main class="container t100 d-flex justify-content-cente mb-4">
        <div class="row">

            <div class="col-12 container d-flex flex-column bg-light mt-3">
                    <div class="mt-2">
                        <p class="m-0 fw-bold"> Nome<?php $produto['nome']?></p>
                        <div class="border border-2 border-dark rounded-2"></div>
                    </div>
                <!-- sequencia de teste-->

                <div>
                    <div class="col-12 p-1 m-2 ms-0">
                        <div class="card t100 border-2 border-light ">
                          <img class="card-img-top" class="imgCard" src="data:image/png;base64,<?=base64_encode($produto['imagem'])?>" alt="Imagem de capa do card">
                            <div class="d-flex flex-wrap">
                                  <div class="card-body">
                                    <p class="fs-5 fw-bold m-1 overflow-auto bd-highlight text-break text-uppercase" style="width: 100%; height:3rem;"><?php $produto['name']?></p>
                                    <p class="fs-7 fw-bold m-1">Valor: R$<?=number_format($produto['valor'], 2, ",", ".")?></p>
                                    <p class="fs-7 fw-bold m-1">Descrição:</p>
                                    <p class="fs-7 m-1 overflow-auto bd-highlight text-break" style="width: 100%; height: 5.2rem;"><?php $produto["descricao"]?></p>
                                    </div>
                            </div>
                        </div>
                      </div>

                      <div class="col-9 container d-flex flex-column bg-light mt-3 ">

                        <div class="mb-auto"></div>
        
                        <div class="m-2">
        
                                <div class="d-flex justify-content-between text-center">
        
                                    <div class="col-12 bg-primary rounded-2 d-flex align-items-center">
                                        <a href="main-page.php" class="link-light text-decoration-none t100">adicionar ao carrinho</a>
                                    </div>
        
                                </div>
        
                        </div>
        
                    </div>

                </div>

            </div>

        </div>

    </main>

<!-- footer -->
<?php
include "footer.php";
?>
</html>