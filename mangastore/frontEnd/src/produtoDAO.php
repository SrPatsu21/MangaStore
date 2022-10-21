<?php

require_once "ConexaoBD.php";
require_once "funcoes.php";

    class produtoDAO{

        function consultar($s, $t) {
           //conectar 

           $conexao = ConexaoBD::getConexao(); 

           $sql = "SELECT * FROM produtos limit $s, $t";

            $resultado = $conexao->query($sql);
            $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
            
            return $produtos;
        }

        function consultarPorNome($nome, $s, $t){
            $conexao = ConexaoBD::getConexao(); 

            $sql = "SELECT * FROM produtos where nome LIKE'%$nome%' OR autor LIKE'%$nome%' limit $s, $t ";
 
             $resultado = $conexao->query($sql);
             $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
             
             return $produtos;
        }

        function consultarPrincipal($s, $t) {
            //conectar 
 
            $conexao = ConexaoBD::getConexao(); 
 
            $sql = "SELECT * FROM produtos limit $s, $t";
 
             $resultado = $conexao->query($sql);
             $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
             
             return $produtos;
         }

        function consultarPorDesconto($s, $t) {

            $conexao = ConexaoBD::getConexao(); 

            $sql = "SELECT * FROM produtos where promocao = 1 limit $s, $t";

            $resultado = $conexao->query($sql);
            $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
            
            return $produtos;

        }
        function consultarPorID($idprodutos) {
            //conectar 
 
            $conexao = ConexaoBD::getConexao(); 
 
            $sql = "SELECT * FROM produtos where produtos.idprodutos='$idprodutos'";
 
             $resultado = $conexao->query($sql);
             $produtos = $resultado->fetch(PDO::FETCH_ASSOC);
             
             return $produtos;
         }

    }

?>