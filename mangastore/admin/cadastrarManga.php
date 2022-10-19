<?php
$title = "Cadastrar Manga";
include "header.php";
?>  
        <div class="container bg-gray2 p-3 rounded-3 h95 overflow-auto">

            <form method="POST" enctype="multipart/form-data" action="cadastro_produto.php" class="">
            <h2 class="mb-4">Cadastro de Mangás</h2>

                <div class="mb-3">
                    <label for="idnome" class="form-label bg-gray2">Nome do mangá</label>
                    <input type="text" name="nome" id="idnome" class="form-control bg-gray3">
                </div>

                <div class="mb-3">
                    <label for="idautor" class="form-label bg-gray2">Autor do mangá</label>
                    <input type="text" name="autor" id="idautor" class="form-control bg-gray3">
                </div>

                <div class="mb-3">
                    <label for="iddataLancamento" class="form-label bg-gray2">Data da Lançamento</label>
                    <input type="text" name="dataLancamento" id="iddateLancamento" class="form-control bg-gray3">
                </div>

                <div class="mb-3">
                    <label for="idvolume" class="form-label bg-gray2">Volume</label>
                    <input type="text" name="volume" id="idvolume" class="form-control bg-gray3">
                </div>

                <div class="mb-3">
                    <label for="iddescricao" class="form-label bg-gray2">Descrição</label>
                    <textarea name="descricao" id="iddescricao" cols="30" rows="5" class="form-control bg-gray3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="idvalor" class="form-label bg-gray2">Valor</label>
                    <input type="text" name="valor" id="idvalor" class="form-control bg-gray3">
                </div>

                <div class="mb-3">
                    <label for="idimagem" enctype="multipart/form-data" class="form-label bg-gray2">Imagem</label>
                    <input type="file" name="imagem" id="idimagem" class="form-control bg-gray3">
                </div>

                <div class="mb-3">
                    <label for="idgenero" class="form-label bg-gray2">genero</label>
                    <select name="idgenero" id="idgenero">
                        <?php
                            require_once "src/GeneroDAO.php";
                            $generoDAO = new generoDAO();

                            $idsgenero = $generoDAO->consultarGeneros();

                            foreach($idsgenero as $genero){
                                echo "<option value='{$genero['idgeneros']}'>{$genero['genero']}</option>";
                            }

                        ?>
                    </select>
                </div>

                <div class="form-check">
                    <input class="form-check-input bg-gray3" name="promocao" type="checkbox" value="1" id="idpromocao">
                    <label class="form-check-label bg-gray2" for="idpromocao">
                    Promoção
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input bg-gray3" name="fisico" type="checkbox" value="1" id="idfisico">
                    <label class="form-check-label bg-gray2" for="idfisico">
                    Fisico
                    </label>
                </div>

                <div class="d-flex justify-content-between m-2">
                <a role="button" href="indexAdmin.php" class="bg-white btn btn-outline-danger m-1 t40">Sair</a>
                <button type="submit" formaction="cadastraproduto.php" class="bg-white btn btn-outline-success m-1 t40">Cadastrar</button>
                </div>
                
            </form>
        </div>

        <script>
            var urlParams = new URLSearchParams(window.location.search);
            var msg = urlParams.get('msg');
            if (msg == 1) {
                window.alert("manga cadastrado")
            }
        </script>
            
    
<?php
include "footer.php";
?>
</html>