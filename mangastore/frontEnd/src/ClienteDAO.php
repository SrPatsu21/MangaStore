<?php
require_once "ConexaoBD.php";
class ClienteDAO{
    public function consultarCliente($email){
        $conexao = ConexaoBD::getConexao();

        $sql = "select idcliente, nome, email, endereco from cliente where email='$email'";
        $resultado = $conexao->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }
    
}

