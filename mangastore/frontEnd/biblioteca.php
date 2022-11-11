<?php
 $title = "biblioteca";
include "header.php";
?>

<main class="container mt-3 text-dark mb-3" style="min-height: 80vh;">

                <div class=" mt-4 t100 border border-1 border-light"></div>

                <div class=" d-flex justify-content-center align-items-center">
                  <p class="m-0 fw-bold text-uppercase text-light">em sua biblioteca</p>
                </div>

                <div class="d-flex row justify-content-start">
                        
                        <!-- cards -->

                          <?php
                            $idProdutos = $produtoDAO->consultarNabiblioteca($_SESSION['idcliente']);              

                            foreach ($idProdutos as $id):
                              $produtop = $produtoDAO->consultarPorID($id['idproduto']);
                              ?>

                              <div class="col-3 p-3">
                                <form action="funcaoCarrinho.php" method="post">
                                  <input type="hidden" name="operacao" value="adicionar">
                                  <input type="hidden" name="idproduto" value="<?=$produtop['idprodutos']?>">
                                  <input type="hidden" name="lastUri" value="<?=$_SERVER['REQUEST_URI']?>">
                                  <div class="card t100 border-2 border-light">
                                    <img class="imgCard" src="data:image/png;base64,<?=base64_encode($produtop['imagem'])?>" alt="Imagem de capa do card">
                                      <div class="d-flex flex-wrap">
                                            <div class="card-body ch">
                                              <p class="fs-6 fw-bold m-1 overflow-auto text-break text-uppercase borderBottomName" style="width: 100%; height:3rem;"><?=$produtop["nome"]?></p>
                                              <p class="fs-6 fw-bold m-1">volume: <?=$produtop['volume']?></p>
                                              <p class="fs-6 fw-bold m-1">Valor: R$<?=$produtop['valor']?></p>        
                                            </div>                                   
                                            <div class="pe-2 ps-2 align-items-center d-flex justify-content-between align-items-center t100  " style="height: 3rem;">
                                              <a href="produto.php?id=<?=$produtop['idprodutos']?>" class="t100 d-flex justify-content-center align-items-center me-2 rounded-3 text-decoration-none text-uppercase buttonBlue p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center ">saiba mais...</p></a>
                                            </div>
                                      </div>
                                  </div>
                                </form>
                              </div>

                              <?php
                              endforeach;
                              ?>
                      
                </div>

    </main>

<?php
include "footer.php"
?>