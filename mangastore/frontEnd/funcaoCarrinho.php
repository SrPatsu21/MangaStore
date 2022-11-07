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



        }else if ($_POST['operacao'] == 'limpar') {

            $_SESSION['carrinho'] = null;
            header ("location:" . $_POST['lastUri']);
            
        }else if ($_POST['operacao'] == 'remover') {

            $carrinho = $_SESSION['carrinho']??[];
            /*acao*/
            for ($i=0; $i <= array_key_last($carrinho); $i++) {

                $item = $carrinho[$i]??null;
                var_dump($carrinho);
                var_dump($_POST['idproduto']);

                if ($item['idproduto'] == $_POST['idproduto']) {
                    echo "sobre isso";
                    var_dump($carrinho[$i]);
                    unset($carrinho[$i]);
                    echo "a";
                }
            }
            /*enviar para a session*/  
            $_SESSION['carrinho'] = $carrinho;
            header ("location:" . $_POST['lastUri']);
        }
?>