<?php 
require_once "conexaoBD.php";

class UsuarioDAO{


    function cadastrar($dados){
        $conexao = ConexaoBD::getConexao();

        $senha = md5($dados['senha']);

        $sql = "insert into usuarios (login, senha) values ('{$dados['login']}','{$senha}')";

        $conexao->exec($sql);

    }
    function consultarLogin($login){
        $conexao = ConexaoBD::getConexao();
        $sql ="select * from usuarios where login='$login'";
        $resultado = $conexao->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    function provarLogin($dado){
        $conexao = ConexaoBD::getConexao();

        $senha = md5($dado['senha']);

        $sql ="select * from usuarios where login='{$dado['login']}' and senha='{$senha}'";
        echo $sql;
        $resultado = $conexao->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

}