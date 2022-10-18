<?php 
require_once "ConexaoBD.php";
 
    class generoDAO{

        function consultarGeneros(){
            $conexao = ConexaoBD::getConexao();

            $sql= "select * from generos";

            $resultado = $conexao->query($sql);

            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>