<?php
require_once "ConexaoBD.php";
class ClienteDAO{
    public function consultarCliente($id){
        $conexao = ConexaoBD::getConexao();

        $sql = "select idcliente, nome, endereco, cep from cliente where idcliente='$id'";
        $resultado = $conexao->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }
    
}

