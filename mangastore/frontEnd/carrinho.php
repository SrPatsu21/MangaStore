<?php
    $title = "carrinho";
    include "header.php";

    $idproduto = $_POST['idproduto']??null;
    $operacao = $_POST['operacao']??null;

    echo $idproduto;
    echo $operacao;

    $carrinho = $_SESSION['carrinho']??[];

    if ($operacao == "inserir") {

        $item['idproduto'] = $idproduto;
        $item["quantidade"] = 1;
        $carrinho[] = $item;
    }

    $_SESSION['carrinho'] = $carrinho;
?>
    
    <main style="height: 95vh;" class=" t100 d-flex justify-content-center align-items-center py-3">

        <div class="row t70 bordercarrinho h100">
            
            <!--inicio dos dados-->
            <div class="col-8 container d-flex flex-column bg-light border-end border-end-2 border-dark overflow-auto h100">

                <div class="mt-2">
                    <p class="m-0 fw-bold"> estao em seu carrinho...</p>
                    <div class="border border-2 border-dark rounded-2"></div>
                </div>
                <!-- sequencia de teste-->
                <?php
                $produtoDAO = new produtoDAO();
                foreach ($carrinho as $item):
                    $produtoItem = $produtoDAO->consultarPorID($item['idproduto']);
                ?>
                    <div class="mt-3 t100 d-flex justify-content-between align-items-center p-0 border border-2 border-dark rounded-2">

                            <div class="me-3 border-end border-end-2 border-dark"> <img src="../img/principal/fullmetal-alchemist-brotherhood-4.webp" class="smphote" alt=""></div>
                            <label for="i1tid" class="form-check-label bg-transparent text-dark ms-1"><?= $produtoItem['nome']?></label>
                            <!-- quantidade esta em item -->
                            <button>remover</button>
                    </div>
                <?php
                endforeach;
                ?>

            </div>

            <!--coluna lateral-->
            <div class="col-4 container d-flex flex-column bg-light h100">

                <div class="mb-auto"></div>

                <div class="t100">

                        <p class="fs-6 fw-lighter txtCarrinho">
                           !!! os itens que vc nao deseja mais podem ser desmarcados!!!!
                        </p>

                </div>

                <div class="border border-2 border-dark rounded-2 p-2 mb-2">

                        <div class="d-flex justify-content-between text-center flex-wrap">

                            <div class="t45 d-flex align-items-center m-1">
                                <a href="main-page.php" class="text-decoration-none t100 p1">cancelar</a>
                            </div>
                            <div class="t45 bg-primary rounded-2 d-flex align-items-center m-1">
                                <a href="pagamento.php" class="link-light text-decoration-none t100 rounded-1 p-1">confirmar</a>
                            </div>

                        </div>

                </div>

            </div>

        </div>

    </main>

<?php
include "footer.php";
?>
</html>