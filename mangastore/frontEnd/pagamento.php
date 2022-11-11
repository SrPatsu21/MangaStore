<?php
$title = "pagamento";
include "header.php";

require_once "src/ClienteDAO.php";

$clienteDAO = new ClienteDAO();
$cliente = $clienteDAO->consultarCliente(1);
$_SESSION['idcliente'] = $cliente['idcliente'];
?>
    
    <main style="height: 95vh;" class=" t100 d-flex justify-content-center align-items-center py-3">

        <div class="row t70 bordercarrinho h100">
            
            <!--inicio dos dados-->
            <div class="col-8 container d-flex flex-column bg-light border-end border-end-2 border-dark overflow-auto h100">

                <div class="mt-2">
                    <p class="m-0 fw-bold text-black"> estao em seu carrinho...</p>
                    <div class="border border-2 border-dark rounded-2"></div>
                </div>
                <!-- sequencia de teste-->
                <?php 

                //require_once "addCarrinho.php";
                $produtoDAO = new produtoDAO();
                $carrinho = $_SESSION['carrinho']??[];
                $total = 0;

                foreach ($carrinho as $item):
                    $produtoItem = $produtoDAO->consultarPorID($item['idproduto']);
                ?>
                    <div class="mt-3 t100 d-flex justify-content-between align-items-center p-0 border border-2 border-dark rounded-2">
                            <input type="hidden" name="operacao" value="remover">
                            <input type="hidden" name="idproduto" value="<?=$produtoItem['idprodutos']?>">
                            <input type="hidden" name="lastUri" value="<?=$_SERVER['REQUEST_URI']?>">
                        <div class="me-3 border-end border-end-2 border-dark"> <img src="data:image/png;base64,<?=base64_encode($produtoItem['imagem'])?>" class="smphote" alt=""></div>
                        <div class="t100 d-flex justify-content-between align-items-center">
                            <label class="form-check-label bg-transparent text-dark t40 p-1"><?= $produtoItem['nome']?></label>
                            <label class="form-check-label bg-transparent text-dark t30 p-1">Volume:<?= $produtoItem['volume']?></label>
                            <label class="form-check-label bg-transparent text-dark t30 p-1">Valor:<?= $produtoItem['valor']?></label>
                                <!-- quantidade esta em item -->
                            
                        </div>
                    </div>

                <?php
                $total += $produtoItem['valor'];
                endforeach;
                ?>

            </div>

            <!--coluna lateral-->
            <div class="col-4 container d-flex flex-column bg-light h100">
                
            <div class="t100 mt-2">

            <p class="fs-5 fw-lighter txtCarrinho">
            recarregue a apgina sempre que adicionar um item!
            </p>

            </div>
            
                <div class="mb-auto"></div>

                <div class="t100">

                        <p class="fs-6 fw-lighter txtCarrinho">
                           valor total = <?= $total ?>
                        </p>

                </div>

                <div class="border border-2 border-dark rounded-2 p-2 mb-2">

                        <div class="d-flex justify-content-between text-center flex-wrap">

                            <div class="t30 bg-primary rounded-2 d-flex align-items-center m-1">
                                <a href="carrinho.php" class="link-light text-decoration-none t100 rounded-1 p-1">cancelar</a>
                            </div>
                            <form action="finalizarCompra.php" method="post" class="t35 d-flex align-items-center m-1">
                                <input type="hidden" name="lastUri" value="<?=$_SERVER['REQUEST_URI']?>">
                                <button class="btn btn-primary t100">Confirmar</button>
                            </form>
                        </div>

                </div>

            </div>

        </div>

    </main>

<?php
include "footer.php";
?>

<!-- fim do body -->
</html>