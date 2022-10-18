<?php

require_once "ConexaoBD.php";
require_once "funcoes.php";

    class produtoDAO{

        function consultar() {
           //conectar 

           $conexao = ConexaoBD::getConexao(); 

           $sql = "SELECT * FROM produtos";

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
        function consultarPorNome($nome){
            $conexao = ConexaoBD::getConexao(); 

            $sql = "SELECT * FROM produtos where produtos.nome LIKE'%$nome%' OR produtos.autor LIKE'%$nome%'";
 
             $resultado = $conexao->query($sql);
             $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
             
             return $produtos;
        }

        function cadastrar($dado){

            //conectar 

            $conexao = ConexaoBD::getConexao();

            if (!isset($dado['promocao'])) {
                $dado['promocao']=1;
            }

            if (!isset($dado['fisico'])) {
                $dado['fisico']=1;
            }

            $imagem = pegarImagem($_FILES);

            //sql

            $sql = "insert into produtos (nome, autor, dataLancamento, volume, descricao, valor, imagem, promocao, idgenero, fisico)
                    values ('{$dado['nome']}','{$dado['autor']}','{$dado['dataLancamento']}','{$dado['volume']}','{$dado['descricao']}',
                    '{$dado['valor']}','{$imagem}','{$dado['promocao']}','{$dado['idgenero']}','{$dado['fisico']}')";

            //echo $sql;

            //enviar
            $conexao->exec($sql);
        }

        function remover($idprodutos){
            $conexao = ConexaoBD::getConexao();

            $sql = "delete from produtos where idprodutos='$idprodutos'";

            $conexao->exec($sql);
        }

        function editar($dado){
            $conexao = ConexaoBD::getConexao();

            if (!isset($dado['promocao'])) {
                $dado['promocao']=1;
            }

            if (!isset($dado['fisico'])) {
                $dado['fisico']=1;
            }

            $imagem = pegarImagem($_FILES);

            //sql

            $sql = "update produtos set 
            nome='{$dado['nome']}',
            autor='{$dado['autor']}',
            dataLancamento='{$dado['dataLancamento']}',
            volume='{$dado['volume']}',
            descricao='{$dado['descricao']}',
            valor='{$dado['valor']}',
            imagem='$imagem',
            promocao='{$dado['promocao']}',
            idgenero='{$dado['idgenero']}',
            fisico='{$dado['fisico']}'

            where idprodutos='{$dado['idprodutos']}' ";

            //echo $sql;

            //enviar
            $conexao->exec($sql);
        }

    }


?>