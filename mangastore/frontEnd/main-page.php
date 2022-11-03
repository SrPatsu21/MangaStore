<?php
 $title = "Home";
include "header.php";
?>

    <main class="container mt-3 text-dark mb-3" style="min-height: 80vh;">



                <!-- em promosao-->

                <div class=" mt-4 t100 border border-1 border-light"></div>

                <div class=" d-flex justify-content-center align-items-center">
                  <p class="m-0 fw-bold text-uppercase text-light">em promocao</p>
                </div>

                <div class="d-flex row justify-content-start">
                        
                        <!-- cards -->

                          <?php
                              $produtos = $produtoDAO->consultarPorDesconto(0, 4);
                          

                            foreach ($produtos as $produto):

                              ?>

                              <div class="col-3 p-3">

                                <div class="card t100 border-2 border-light ">
                                <form action="addCarrinho.php" method="POST">
                                  <input type="hidden" name="idproduto" value="<?=$produto['idprodutos']?>" >
                                  <input type="hidden" name="operacao" value="inserir">
                                  <img class="imgCard" src="data:image/png;base64,<?=base64_encode($produto['imagem'])?>" alt="Imagem de capa do card">
                                    <div class="d-flex flex-wrap">
                                          <div class="card-body ch">
                                            <p class="fs-6 fw-bold m-1 overflow-auto text-break text-uppercase borderBottomName" style="width: 100%; height:3rem;"><?=$produto["nome"]?></p>
                                            <p class="fs-6 fw-bold m-1">volume: <?=$produto['volume']?></p>
                                            <p class="fs-6 fw-bold m-1">Valor: R$<?=$produto['valor']?></p>        
                                          </div>                                   
                                          <div class="pe-2 ps-2 align-items-center d-flex justify-content-between align-items-center t100  " style="height: 3rem;">
                                            <a href="produto.php?id=<?=$produto['idprodutos']?>" class="t50 d-flex justify-content-center align-items-center me-2 rounded-3 text-decoration-none text-uppercase buttonBlue p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center ">saiba mais...</p></a>
                                            <button type="submit" class="t50 d-flex justify-content-center align-items-center  ms-2 rounded-3 text-decoration-none text-uppercase buttonRed p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center ">ADD ao carrinho</p></button>
                                          </div>
                                    </div>
                                </form>                                  
                                </div>
                              </div>

                              <?php
 

                            endforeach;
                          ?>
                      
                </div>

              <!-- principal-->

                <div class=" mt-4 t100 border border-1 border-light"></div>

                <div class=" d-flex justify-content-center align-items-center">
                  <p class="m-0 fw-bold text-uppercase text-light">principal</p>
                </div>

                <div class="d-flex row justify-content-start">
                      
                      <!-- cards -->

                        <?php
                            $produtos = $produtoDAO->consultarPrincipal(0,6);

                          foreach ($produtos as $produto):

                            ?>

                          <div class="col-3 p-3">

                            <div class="card t100 border-2 border-light ">
                            <form action="addCarrinho.php" method="POST">
                                <input type="hidden" name="idproduto" value="<?=$produto['idprodutos']?>" >
                                <input type="hidden" name="operacao" value="inserir">
                                <img class="imgCard" src="data:image/png;base64,<?=base64_encode($produto['imagem'])?>" alt="Imagem de capa do card">
                                  <div class="d-flex flex-wrap">
                                      <div class="card-body ch">
                                        <p class="fs-6 fw-bold m-1 overflow-auto text-break text-uppercase borderBottomName" style="width: 100%; height:3rem;"><?=$produto["nome"]?></p>
                                        <p class="fs-6 fw-bold m-1">volume: <?=$produto['volume']?></p>
                                        <p class="fs-6 fw-bold m-1">Valor: R$<?=$produto['valor']?></p>        
                                      </div>                                   
                                      <div class="pe-2 ps-2 align-items-center d-flex justify-content-between align-items-center t100  " style="height: 3rem;">
                                        <a href="produto.php?id=<?=$produto['idprodutos']?>" class="t50 d-flex justify-content-center align-items-center me-2 rounded-3 text-decoration-none text-uppercase buttonBlue p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center ">saiba mais...</p></a>
                                        <button type="submit" class="t50 d-flex justify-content-center align-items-center  ms-2 rounded-3 text-decoration-none text-uppercase buttonRed p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center ">ADD ao carrinho</p></button>
                                      </div>
                                </div>
                              </form>
                            </div>
                          </div>

                            <?php


                          endforeach;
                        ?>
                    
                </div>
                  
    </main>
<?php
include "footer.php"
?>