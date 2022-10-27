                        <?php
                        $title = "pesquisa";
                        include "header.php";
                      ?>
                        
                      <main class="container mt-3 text-dark mb-3" style="min-height: 80vh;">

                      <div class=" d-flex justify-content-evenly align-items-center mt-1 border-bottom">
                        <div>
                        <?php if (isset($_GET['nome'])) {
                        ?>
                          <p class="m-0 fw-bold text-uppercase text-light">sua pesquisa de:<?= $_GET['nome'] ?> </p>
                        <?php 
                        } 
                        ?>
                        </div>
                      
                      </div>

                      <div class="d-flex row justify-content-start">

                        
                        <?php
                        $s = 0;
                        $t = 8;

                        if (isset($_GET['nome']) && $_GET['nome']!= null){
                           
                           if (isset($_GET['idgenero']) && $_GET['idgenero']!= null) {
                            $produtos = $produtoDAO->consultarPorNomeEGenero($_GET['nome'], $s, $t, $_GET['idgenero']);
                           } else {
                            $produtos = $produtoDAO->consultarPorNome($_GET['nome'], $s, $t);
                           }
                        
                        }else{
                          if (isset($_GET['idgenero']) && $_GET['idgenero']!= null) {
                            $produtos = $produtoDAO->consultarPorGenero($s, $t, $_GET['idgenero']);
                          } else {
                            $produtos = $produtoDAO->consultar($s, $t);
                          }
                        }

                          foreach ($produtos as $produto):

                        ?>

                            <div class="col-3 p-3">
                              <form action="carrinho.php" method="POST">
                                <input type="hidden" name="idproduto" value="<?=$produto['idprodutos']?>" >
                                <input type="hidden" name="operacao" value="inserir">
                                <div class="card t100 border-2 border-light">
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
                                </div>

                              </form>
                            </div>

                        <?php
                          endforeach;
                        ?>
                      </div>
                      </main>
                        <?php 
                        include "footer.php";
                        ?>