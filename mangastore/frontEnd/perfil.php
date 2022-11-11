<?php
$title = "Pagamento";
include "header.php";
?>
<!-- fim do head -->

<div style="height: 80vh;" class="t100 bg-cadastrar d-flex justify-content-center align-items-center">

    <div class="d-flex justify-content-center t80">
                <form class="col-8 border border-3 bg-dgd p-3 rounded-2 bg-gray border-secondary">
                    <div class="t100">

                        <div class="t100 d-flex justify-content-center border-bottom border-bottom-2 border-light">

                            <a href="#"><img src="../img/perfil/patrick vrau o mais troll da soloQ brasileira.jpg" class="rounded-circle foto border border-2 border-light mb-2" alt=""></a>

                        </div>
                        <!-- fim da foto -->
                        <div class="d-flex justify-content-between mb-4 mt-3 row">

                            <div class="d-flex flex-column col-12 mb-2">
                                
                                <a href="#" class="text-star text-light fs-7 fw-bold text-uppercase t100 border border-1 border-light p-1">alterar perfil</a>
                                <input type="text" class="text-star text-light fs-7 fw-bold bg-transparent t100 border border-1 border-light p-1 m-0" placeholder="nome antigo">
                                <input type="text" class="text-star text-light fs-7 fw-bold bg-transparent t100 border border-1 border-light p-1 m-0" placeholder="email antigo">
                                <input type="text" class="text-star text-light fs-7 fw-bold bg-transparent t100 border border-1 border-light p-1 m-0" placeholder="senha antiga">
                                <input type="text" class="text-star text-light fs-7 fw-bold bg-transparent t100 border border-1 border-light p-1 m-0" placeholder="data de nascimento antiga">

                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="bg-primary rounded-2 d-flex align-items-center t40">
                                    <a href="#" class="link-light text-decoration-none t100 text-center">salvar</a>
                                </div>
    
                            </div>
                        </div>
                        
                        <!-- button -->

                        <div class="d-flex justify-content-around text-center mt-2 col-12">

                            <div class="col-3 bg-primary rounded-2 d-flex align-items-center">
                                <a href="main-page.php" class="link-light text-decoration-none t100">pagina inicial</a>
                            </div>

                            <div class="col-3 bg-primary rounded-2 d-flex align-items-center">
                                <a href="login.php" class="link-light text-decoration-none t100">sair</a>
                            </div>

                        </div>
                            
                    </div>
                </form>
    </div>
</div>

            <!-- footer -->
<?php
include "footer.php";
?>
</html>

$carrinho = $_SESSION['carrinho']??[];
            /*acao*/
            for ($i=0; $i <= array_key_last($carrinho); $i++) { 
                $item = $carrinho[$i]??null;
                var_dump($item['idproduto']);
                if ($item != null && $item['idproduto'] == $_POST['idproduto']) {
                    $carrinho[$i] = null;
                }
            }
            /*enviar para a session*/  
            $carrinho[] = $item;
            $_SESSION['carrinho'] = $carrinho;

                        /*dump*/
                        var_dump($_POST['operacao']);
                        echo "<br>";
                        var_dump($_POST['lastUri']);
                        echo "<br>";
                        var_dump($carrinho);

