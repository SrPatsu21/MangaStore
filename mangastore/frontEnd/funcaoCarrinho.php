<?php
    function insertIntoCarrinho($idproduto){
        session_start();
        $carrinho = $_SESSION['carrinho']??[];
        /*acao*/
        $item['idproduto'] = $idproduto;
        $item["quantidade"] = 1;
        $carrinho[] = $item;
        /*enviar para a session*/

        return $_SESSION['carrinho'] = $carrinho;
    }
    function removeIntoCarrinho($idproduto){
        session_start();
        $carrinho = $_SESSION['carrinho']??[];
        /*acao*/
        $item['idproduto'] = $idproduto;
        for ($i=0; $i <= array_key_last($carrinho); $i++) { 
            $item = $carrinho[$i]??null;
            if ($item != null && $item['idproduto'] == $idproduto) {
                unset($carrinho[$i]);
            }
        }
        $carrinho[] = $item;
        /*enviar para a session*/
        
        return $_SESSION['carrinho'] = $carrinho;
    }

?>