<?php

class ConexaoBD{


    public  static function getConexao():PDO{
        $conexao = new PDO("mysql:host=localhost;dbname=mangastore","root","coringa");
        return $conexao;
    }
}

ConexaoBD::getConexao();