<?php 
require_once "ConexaoBD.php";
require_once "produtoDAO.php";
class CompraDAO{
    public function registrarCompra($dados){
        /*classes*/
        $produtoDAO = new produtoDAO();
        $conexao = ConexaoBD::getConexao();

        if ($dados['carrinho'] != null) {

            /*consulta valor*/
            $idproduto = $dados['carrinho'];
            $valortotal=0;
            foreach ($idproduto as $v){
                $produtoItem = $produtoDAO->consultarPorID($v['idproduto']);
                $valortotal += $produtoItem['valor'];
            }

            /*setar variaveis*/
            $data = date('Y-m-d H:1');
            $sql = "insert into compras(idcliente, data, valortotal) values('{$dados['idcliente']}', '$data', '$valortotal');";
            
            /*inserir no banco*/
            $conexao->exec($sql);

            /*inserir na biblioteca*/
            $idcompra = $conexao->lastInsertId();
            /*definir variavel*/
            $carrinho = $dados['carrinho'];

            /*inserir no banco*/
            foreach($carrinho as $item){
                $produtoItem = $produtoDAO->consultarPorID($item['idproduto']);
                $sql = "insert into biblioteca(idcompra, idcliente, idproduto, valor) values('$idcompra','{$dados['idcliente']}','{$item['idproduto']}', '{$produtoItem['valor']}')";
                $conexao->exec($sql);
            }
            $_SESSION['carrinho'] = null;
            
        }
        
    }
}