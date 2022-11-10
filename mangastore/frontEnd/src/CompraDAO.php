<?php 
require_once "ConexaoBD.php";
class CompraDAO{
    public function registrarCompra($dados){
        $conexao = ConexaoBD::getConexao();
        $data = date('Y-m-d H:1');
        $sql = "inset into compras (idcliente, data) values ('{$dados['idcliente']}', '$data'";
        
        $conexao->exec($sql);
        $idcompra = $conexao->lastInsertId();

        $carrinho = $dados['carrinho'];

        foreach($carrinho as $item){
            $sql = "insert into itens_compra(idcompra, idproduto, quantidade, valor) values('$idcompra','{$item['quantidade']}', '{$item['valor']} )";
            $conexao->exec($sql);
        }
    }
}