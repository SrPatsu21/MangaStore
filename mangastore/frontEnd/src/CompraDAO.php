<?php 
require_once "ConexaoBD.php";
require_once "produtoDAO.php";
class CompraDAO{
    public function registrarCompra($dados){
        /*classes*/
        $produtoDAO = new produtoDAO();
        $conexao = ConexaoBD::getConexao();

        /*consulta valor*/
        foreach ($dados as $v){
            $produtoItem = $produtoDAO->consultarPorID($v['idproduto']);
            $valortotal = $produtoItem['valor'];
        }

        /*setar variaveis*/
        $data = date('Y-m-d H:1');
        $sql = "inset into compras (idcliente, data, valortotal) values ('{$dados['idcliente']}', '$data', '$valortotal'";
        
        /*inserir no banco*/
        $conexao->exec($sql);

        /*inserir na biblioteca*/
        $idcompra = $conexao->lastInsertId();
        /*definir variavel*/
        $carrinho = $dados['carrinho'];

        /*inserir no banco*/
        foreach($carrinho as $item){
            $sql = "insert into bilbioteca(idcompra, idcliente, idproduto, valor) values('$idcompra','{$dados['idcliente']}','{$item['idproduto']}', '{$item['valor']}')";
            $conexao->exec($sql);
        }
    }
}