<?php

    session_start();
    $idproduto = $_REQUEST['idproduto']??null;
    $operacao = $_REQUEST['operacao']??null;

    $last_link = $_GET['last_link'];

    echo $idproduto;
    echo $operacao;

    $carrinho = $_SESSION['carrinho']??[];

    if ($operacao == "inserir") {

        $item['idproduto'] = $idproduto;
        $item["quantidade"] = 1;
        $carrinho[] = $item;
        $_SESSION['carrinho'] = $carrinho;

        header ($last_link);

    }else if ($operacao == "remover") {

        for ($i=0; $i <= array_key_last($carrinho); $i++) { 
            $item = $carrinho[$i]??null;
            if ($item != null && $item['idproduto'] == $idproduto) {
                unset($carrinho[$i]);
            }
        }
        header ($last_link);
    }

   
    
?>