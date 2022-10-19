<?php
 $title = "consultar";
include "header.php";
require_once "src/produtoDAO.php";
?>
        <div class="container mt-3 mb-3 bg-gray2 p-3 rounded-3">
                <div>
                    <form action="consultar.php" class="p-3 t100 bg-transparent d-flex justify-content-start">

                        <label for="" class="bg-transparent">Nome ou Autor:</label>
                        <input type="text" name="nome" class="form-control t45 mx-2">
                        <button type="submit" class="btn btn-primary">Ir</button>

                    </form>
                </div>

                <div style="height: 75vh;" class="p-3 rounded-3 overflow-auto">
                    
                    <table class="table border">

                        <tr class="d-flex justify-content-around t100 text-white tableHeader">         
                            <th class="t20 text-center">Nome</th>
                            <th class="t20 text-center">autor</th>
                            <th class="t20 text-center">volume</th>
                            <th class="t20 text-center">Data de lancamento</th>
                            <th class="t20 text-center">remover/editar</th>
                        </tr>

                        <?php
                        $produtoDAO = new produtoDAO();

                        if(isset($_GET['acao']) && $_GET['acao']=='remover'){
                            $produtoDAO->remover($_GET['idprodutos']);
                        }
                        
                        if (isset($_GET['nome']) && $_GET['nome']!= ""){

                            $produtos = $produtoDAO->consultarPorNome($_GET['nome']);
                            

                        }else{
                            $produtos = $produtoDAO->consultar();
                        }           
                        ?>
                        <?php
                            foreach ($produtos as $produto):
                        ?>

                        <tr class="d-flex justify-content-around t100 text-white align-items-center tableConsultar">                    
                            <td class="t20 text-center text-break"><?=$produto["nome"]?></td>
                            <td class="t20 text-center text-break"><?=$produto['autor']?></td>
                            <td class="t20 text-center text-break"><?=$produto['volume']?></td>
                            <td class="t20 text-center text-break"><?=$produto['dataLancamento']?></td>
                            <td class="t20 text-center text-break magin-auto">
                                <a href="editarManga.php?acao=editar&idprodutos=<?=$produto['idprodutos']?>" class="link-light text-decoration-none t100 rounded-1 p-1 bg-primary">Editar</a>
                                <a href="consultar.php?acao=remover&idprodutos=<?=$produto['idprodutos']?>" class="link-light text-decoration-none t100 rounded-1 p-1 bg-danger">Remover</a>
                            </td>
                        </tr>

                        <?php
                           endforeach;
                        ?>

                    </table>

                </div>
            

        </div>
    
<?php
include "footer.php";
?>
</html>