<!DOCTYPE html>
<html lang="pt-br" class="h100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css"> 

</head>
<!-- fim do head -->

<body class="bg-cadastrar">
    <div class="d-flex d-flex justify-content-center align-items-center" style="height: 90vh;">
                <form class="border border-3 bg-dgd p-3 w-30 rounded-2 bg-gray border-secondary">
                    <div class="row">

                        <!--input text -->
                        <div class="col-12 mb-2 d-flex align-items-center justify-content-center w-100 mt-2">
                            <label for="nomeid" class="t10 lablerg labelIcons"><img src="../img/loginECadastro/person-fill.svg" class="iconz" alt=""></label>
                            <input type="text" name="name" id="nomeid" class="t90 mgdolado form-control formm" placeholder="*Seu nome:">
                        </div>

                        <div class="col-12 mb-2 d-flex align-items-center justify-content-center w-100">
                                <label for="emailid" class="t10 lablerg labelIcons"><img src="../img/loginECadastro/envelope-fill.svg" class="iconz" alt=""></label>
                                <input type="email" name="email" id="emailid" class="t90 mgdolado form-control formm" placeholder="*Email:">
                    </div> 

                        <div class="col-12 mb-2 d-flex align-items-center justify-content-center w-100">
                                <label for="senha1id" class="t10 lablerg labelIcons"><img src="../img/loginECadastro/key-fill.svg" class="iconz" alt=""></label>
                                <input type="password" name="senha1" id="senha1id" class="t90 mgdolado form-control formm" placeholder="*Senha:">
                        </div> 

                        <div class="col-12 mb-2 d-flex align-items-center justify-content-center w-100">
                            <label for="senha2id" class="t10 lablerg labelIcons "><img src="../img/loginECadastro/key-fill.svg" class="iconz" alt=""></label>
                            <input type="password" name="senha2" id="senha2id" class="t90 mgdolado form-control formm" placeholder="*repita sua senha:">
                        </div>
            
                        <!-- date -->

                        <div class="col-12 d-flex align-items-cente justify-content-center mb-2">
                                <div class="t96">
                                    <label for="dataid" class="form-check-label bg-transparent text-light">*Sua data de nascimento:</label>
                                    <br>
                                    <input type="date" class="rounded-1" name="data" id="dataid">
                                    
                                </div>
                        </div>
                        
                        <!-- box -->
                        <div class="col-12 d-flex align-items-cente justify-content-center mt-5 ">
                            <div class="t96">
                                <input type="checkbox" name="notificar" id="notificarid">
                                <label for="notificarid" class="form-check-label bg-transparent text-light">notificar me?</label>
                            </div>
                        </div> 
                    
                        <!-- button -->

                        <div class="d-flex justify-content-between text-center mt-2">

                            <div class="col-3 d-flex align-items-center">
                                <a href="main-page.php" class="text-decoration-none t100 buttonRed">cancelar</a>
                            </div>

                            <div class="col-3 bg-primary rounded-2 d-flex align-items-center">
                                <a href="login.php" class="link-light text-decoration-none t100 buttonBlue">Entrar</a>
                            </div>

                        </div>

                    </div>
                </form>
    </div>

            <!-- footer -->
      
<?php
include "footer.php";
?>
</html>