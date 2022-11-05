<?php
session_start();
        if ($_POST['operacao'] == 'adicionar') {
            $carrinho = $_SESSION['carrinho']??[];
            /*acao*/
            $item['idproduto'] = $_POST['idproduto'];
            $item["quantidade"] = 1;
            $carrinho[] = $item;
            /*enviar para a session*/
            $_SESSION['carrinho'] = $carrinho;
            header ("location:" . $_POST['lastUri']);

            /*dump*/
            var_dump($_POST['operacao']);
            echo "<br>";
            var_dump($_POST['lastUri']);
            echo "<br>";
            var_dump($carrinho);

        }
        if ($_POST['operacao'] == 'limpar') {
            $_SESSION['carrinho'] = null;
            header ("location:" . $_POST['lastUri']);
        }

        if ($_POST['operacao'] == 'remover') {
            $carrinho = $_SESSION['carrinho']??[];
            $item['idproduto'] = $_POST['idproduto'];
            /*acao*/
            for ($i=0; $i <= array_key_last($carrinho); $i++) { 
                $item = $carrinho[$i]??null;
                if ($item != null && $item['idproduto'] == $_POST['idproduto']) {
                    unset($carrinho[$i]);
                }
            }
            /*enviar para a session*/  
            $carrinho[] = $item;
            $_SESSION['carrinho'] = $carrinho;
        }
?>