<?php
$title = "Editar Manga";
include "header.php";
require_once "src/GeneroDAO.php";
require_once "src/produtoDAO.php";
require_once "src/GeneroDAO.php";

$produtoDAO = new produtoDAO();

$produto = $produtoDAO->consultarPorID($_GET['idprodutos']);
?>
        <div class="container bg-gray2 p-3 rounded-3 h95 overflow-auto">
            <form method="POST" enctype="multipart/form-data" action="editar_produto.php" class="">
            <h2 class="mb-4">Edicao de Mangás</h2>

                <input type="hidden" name="idprodutos" value="<?= $_GET['idprodutos'] ?>">

                <div class="mb-3">
                    <label for="idnome" class="form-label bg-gray2">Nome do mangá</label>
                    <input type="text" name="nome" id="idnome" class="form-control bg-gray3" value="<?= $produto['nome']?>">
                </div>

                <div class="mb-3">
                    <label for="idautor" class="form-label bg-gray2">Autor do mangá</label>
                    <input type="text" name="autor" id="idautor" class="form-control bg-gray3" value="<?= $produto['autor']?>">
                </div>

                <div class="mb-3">
                    <label for="iddataLancamento" class="form-label bg-gray2">Data da Lançamento</label>
                    <input type="text" name="dataLancamento" id="iddataLancamento" class="form-control bg-gray3" value="<?= $produto['dataLancamento']?>">
                </div>

                <div class="mb-3">
                    <label for="idvolume" class="form-label bg-gray2">Volume</label>
                    <input type="text" name="volume" id="idvolume" class="form-control bg-gray3" value="<?= $produto['volume']?>">
                </div>

                <div class="mb-3">
                    <label for="iddescricao" class="form-label bg-gray2">Descrição</label>
                    <textarea name="descricao" id="iddescricao" cols="30" rows="5" class="form-control bg-gray3"><?= $produto['descricao']?></textarea>
                </div>

                <div class="mb-3">
                    <label for="idvalor" class="form-label bg-gray2">Valor</label>
                    <input type="text" name="valor" id="idvalor" class="form-control bg-gray3" value="<?= $produto['valor']?>">
                </div>

                <div class="mb-3">
                    <label for="idimagem" enctype="multipart/form-data" class="form-label bg-gray2">Imagem</label>
                    <input type="file" name="imagem" id="idimagem" class="form-control bg-gray3">
                </div>

                <div class="mb-3">
                    <label for="idgenero" class="form-label bg-gray2">genero</label>
                    <select name="idgenero" id="idgenero">
                        <?php
                            $generoDAO = new generoDAO();

                            $idsgenero = $generoDAO->consultarGeneros();

                            foreach($idsgenero as $genero){
                                $selected = " ";
                                if($produto['idgenero'] == $genero['idgenero'])
                                $selected = "SELECTED";
                                echo "<option $selected value='{$genero['idgeneros']}'>{$genero['genero']}</option>";
                            }

                        ?>
                    </select>
                </div>

                <div class="form-check">
                    <?php
                        $checked1 = "";

                        if ($produto['promocao'] == 1) {
                            $checked1 = "checked";
                        }else {
                            $checked1 = "";
                        }

                    ?>

                    <input class="form-check-input bg-gray3" name="promocao" <?= $checked1 ?> type="checkbox" value="1" id="idpromocao">
                    <label class="form-check-label bg-gray2" for="idpromocao">
                    Promoção
                    </label>
                </div>

                <div class="form-check">
                    <?php
                    //nao precisava mas fiz o checked2
                        $checked2 = "";

                        if ($produto['fisico'] == 1) {
                            $checked2 = "checked";
                        }else {
                            $checked2 = "";
                        }

                    ?>
                    <input class="form-check-input bg-gray3" name="fisico" type="checkbox" value="1" id="idfisico">
                    <label class="form-check-label bg-gray2" for="idfisico">
                    Fisico
                    </label>
                </div>

                <div class="d-flex justify-content-between m-2">
                <a role="button" href="indexAdmin.php" class="bg-white btn btn-outline-danger m-1 t40">Sair</a>
                <button type="submit" formaction="editarproduto.php" class="bg-white btn btn-outline-success m-1 t40">Editar</button>
                </div>
                
            </form>
        </div>
    
<?php
include "footer.php";
?>
</html>