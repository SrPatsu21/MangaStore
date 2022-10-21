                        <?php
                        $title = "pesquisa";
                        include "header.php";
                        
                      ?>
                        
                      <main class="container mt-3 text-dark mb-3" style="min-height: 80vh;">

                      <div class=" mt-4 t100 border border-1 border-light"></div>

                      <div class=" d-flex justify-content-evenly align-items-center mt-1">

                        <p class="m-0 fw-bold text-uppercase text-light">sua pesquisa de: <?= $_GET['nome']?> </p>
                        
                        <div>
                          <label for="idgenero" class="form-label textWhite">genero</label>
                          <select class="rounded" name="idgenero" id="idgenero">
                              <?php
                                  require_once "src/GeneroDAO.php";
                                  $generoDAO = new generoDAO();

                                  $idsgenero = $generoDAO->consultarGeneros();

                                  foreach($idsgenero as $genero){
                                      echo "<option value='{$genero['idgeneros']}'>{$genero['genero']}</option>";
                                  }

                              ?>
                          </select>'
                        </div>
                      </div>

                      <div class="d-flex row justify-content-start">

                        
                        <?php
                        
                        $s = 0;
                        $t = 3;

                        if (isset($_GET['nome']) && $_GET['nome']!= null){

                            $produtos = $produtoDAO->consultarPorNome($_GET['nome'], $s, $t);
                        
                        }else{
                            $produtos = $produtoDAO->consultar($s, $t);
                        }

                          foreach ($produtos as $produto):

                            ?>

                            <div class="col-3 p-3">

                              <div class="card t100 border-2 border-light ">
                                <img class="imgCard" src="data:image/png;base64,<?=base64_encode($produto['imagem'])?>" alt="Imagem de capa do card">
                                  <div class="d-flex flex-wrap">
                                        <div class="card-body ch">
                                          <p class="fs-6 fw-bold m-1 overflow-auto text-break text-uppercase borderBottomName" style="width: 100%; height:3rem;"><?=$produto["nome"]?></p>
                                          <p class="fs-6 fw-bold m-1">volume: <?=$produto['volume']?></p>
                                          <p class="fs-6 fw-bold m-1">Valor: R$<?=$produto['valor']?></p>        
                                        </div>                                   
                                        <div class="pe-2 ps-2 align-items-center d-flex justify-content-between align-items-center t100  " style="height: 3rem;">
                                          <a href="produto.php?id=<?=$produto['idprodutos']?>" class="t50 d-flex justify-content-center align-items-center me-2 rounded-3 text-decoration-none text-uppercase buttonBlue p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center ">saiba mais...</p></a>
                                          <a href="#" class="t50 d-flex justify-content-center align-items-center  ms-2 rounded-3 text-decoration-none text-uppercase buttonRed p-2" style="height: 2em;"><p class="fs-8 fw-bold m-0 text-center ">ADD ao carrinho</p></a>
                                        </div>
                                  </div>
                                
                              </div>
                            </div>

                            <?php


                          endforeach;
                        ?>
                      </div>
                      </main>
                        <?php 
                        include "footer.php";
                        ?>