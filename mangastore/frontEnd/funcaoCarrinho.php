<?php
    function insertIntoCarrinho($idproduto){
        if ($idproduto != 0 || null) {
            $carrinho = $_SESSION['carrinho']??[];
            /*acao*/
            $item['idproduto'] = $idproduto;
            $item["quantidade"] = 1;
            $carrinho[] = $item;
            /*enviar para a session*/
            var_dump ($carrinho);
            $_SESSION['carrinho'] = $carrinho;
        }

    }
    function removeIntoCarrinho($idproduto){
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
        
        $_SESSION['carrinho'] = $carrinho;
    }

?>