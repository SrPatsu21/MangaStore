<?php
 $title = "Home";
include "header.php";

if (!isset($_GET['ndp'])) {
  $ndp=0;
}else {
  $ndp = $_GET['ndp'];
}
if (!isset($_GET['ndpp'])) {
  $ndpp=0;
}else {
  $ndpp = $_GET['ndpp'];
}
?>

    <main class="container mt-3 text-dark mb-3" style="min-height: 80vh;">



                <!-- em promosao-->

                <div class=" mt-4 t100 border border-1 border-light"></div>

                <div class=" d-flex justify-content-center align-items-center">
                  <p class="m-0 fw-bold text-uppercase text-light">em promoção</p>
                </div>

                <div class="d-flex row justify-content-start">
                        
                        <!-- cards -->

                          <?php
                          $sp = $ndpp*4;
                          $tp = 4;
                              $produtos = $produtoDAO->consultarPorDesconto($sp, $tp);
                              /*var_dump($sp, $tp);*/
                            
                            if ($produtos == null) {
                              echo '<p class="fs-6 fw-bold m-1 overflow-auto text-break text-uppercase textWhite text-center" style="width: 100%; height:3rem;">Não há mais produtos!</p>';
                            }else {

                            foreach ($produtos as $produtop):

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
                                              <a href="produto.php?id=<?=$produtop['idprodutos']?>" class="t50 d-flex justify-content-center align-items-center me-2 rounded-3 text-decoration-none text-uppercase buttonBlue p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center ">saiba mais...</p></a>
                                              <button type="sumit" class="t50 d-flex justify-content-center align-items-center ms-2 rounded-3 text-decoration-none text-uppercase buttonRed p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center">ADD ao carrinho </p></button>
                                            </div>
                                      </div>
                                  </div>
                                </form>
                              </div>

                              <?php
 

                            endforeach;
                          }
                          ?>
                      
                </div>

                <!-- ir para proxima pagina -->
                <div class="t100 d-flex justify-content-center align-items-center mt-auto">
                                <div class="d-flex justify-content-between align-items-center t10 rounded-pill border border-2 px-2">
                                  <!-- volta -->
                                  <form action="" method="get">
                                    <input type="hidden" name="ndp" value="<?php if (isset($_GET['ndp'])) {echo $_GET['ndp'];} else {echo $ndp;} ?>">
                                    <button class="bg-transparent textWhite borderRight" style="height: 32px" name="ndpp" type="submit" value=" <?php
                                      if ($ndpp <= 0) {
                                        echo $ndpp;
                                      }else {
                                        echo $ndpp-1;
                                      }?>"><-</button>
                                  </form>
                                  <!-- pagina -->
                                    <p class="p-1 m-0 bg-transparent border border-0 p-0 textWhite" style="height: 32px"><?= $ndpp ?></p>
                                  <!-- proximo -->
                                  <form action="" method="get">
                                  <input type="hidden" name="ndp" value="<?php if (isset($_GET['ndp'])) {echo $_GET['ndp'];} else {echo $ndp;} ?>">
                                    <button class="bg-transparent textWhite borderLeft" style="height: 32px" name="ndpp" type="submit" value="<?= $ndpp+1 ?>"> -> </button>
                                  </form>
                                </div>
                </div>

              <!-- principal-->

                <div class=" mt-4 t100 border border-1 border-light"></div>

                <div class=" d-flex justify-content-center align-items-center">
                  <p class="m-0 fw-bold text-uppercase text-light">principal</p>
                </div>

                <div class="d-flex row justify-content-start">
                      
                      <!-- cards -->

                        <?php
                        $s = $ndp*8;
                        $t = 8;


                            $produtos = $produtoDAO->consultarPrincipal($s, $t);
                          
                          if ($produtos == null) {
                            echo '<p class="fs-6 fw-bold m-1 overflow-auto text-break text-uppercase textWhite text-center" style="width: 100%; height:3rem;">Não há mais produtos!</p>';
                          }else {
                          foreach ($produtos as $produto):
                          
                            ?>

                              <div class="col-3 p-3">
                                <form action="funcaoCarrinho.php" method="post">
                                  <input type="hidden" name="operacao" value="adicionar">
                                  <input type="hidden" name="idproduto" value="<?=$produto['idprodutos']?>">
                                  <input type="hidden" name="lastUri" value="<?=$_SERVER['REQUEST_URI']?>">
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
                                              <button type="sumit" class="t50 d-flex justify-content-center align-items-center ms-2 rounded-3 text-decoration-none text-uppercase buttonRed p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center">ADD ao carrinho </p></button>
                                            </div>
                                      </div>
                                  </div>
                                </form>
                              </div>

                            <?php


                          endforeach;
                        }
                        ?>
                    
                </div>
                <!-- ir para proxima pagina -->
                <div class="t100 d-flex justify-content-center align-items-center mt-auto">
                                <div class="d-flex justify-content-between align-items-center t10 rounded-pill border border-2 px-2">
                                  <!-- volta -->
                                  <form action="" method="get">
                                    <input type="hidden" name="ndpp" value="<?php if (isset($_GET['ndpp'])) {echo $_GET['ndpp'];} else {echo $ndpp;}?>">
                                    <button class="bg-transparent textWhite borderRight" style="height: 32px" name="ndp" type="submit" value=" <?php
                                      if ($ndp <= 0) {
                                        echo $ndp;
                                      }else {
                                        echo $ndp-1;
                                      }?>"><-</button>
                                  </form>
                                  <!-- pagina -->
                                    <p class="p-1 m-0 bg-transparent border border-0 p-0 textWhite" style="height: 32px"><?= $ndp ?></p>
                                  <!-- proximo -->
                                  <form action="" method="get">
                                  <input type="hidden" name="ndpp" value="<?php if (isset($_GET['ndpp'])) {echo $_GET['ndpp'];}  else {echo $ndpp;}?>">
                                    <button style="height: 32px" class="bg-transparent textWhite borderLeft" name="ndp" type="submit" value="<?= $ndp+1 ?>"> -> </button>
                                  </form>
                                </div>
                  </div>
                  
    </main>

<?php
include "footer.php"
?>