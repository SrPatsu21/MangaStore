<!DOCTYPE html>
<html lang="en" class="h100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<!-- fim do head -->
<body class="bg-cadastrar">

    <div class="d-flex d-flex justify-content-center align-items-center" style="height: 90vh;">
            <form class="border border-3 p-3 w-30 rounded-2 bg-dgd border-secondary ">
                <div class="row ">
                    
                    <div class="col-12 mb-4 d-flex align-items-cente justify-content-center">
                        <img src="../img/login/person-fill.svg" class="loginiconpglogin" alt="">
                    </div>

                    <!--input text -->
                        
                        <div class="mt-2">
                            <div class="col-12 mb-2 d-flex align-items-center justify-content-center w-100">
                                    <label for="emailid" class="t10 lablerg labelIcons"><img src="../img/loginECadastro/envelope-fill.svg" class="iconz" alt=""></label>
                                    <input type="email" name="email" id="emailid" class="t90 mgdolado form-control formm" placeholder="*Email:">
                            </div> 

                            <div class="col-12 mb-2 d-flex align-items-center justify-content-center w-100">
                                    <label for="senhaid" class="t10 lablerg labelIcons"><img src="../img/loginECadastro/key-fill.svg" class="iconz" alt=""></label>
                                    <input type="password" name="senha" id="senhaid" class="t90 mgdolado form-control formm" placeholder="*Senha:">
                            </div>  

                            <!-- box -->

                            <div class="col-12 d-flex align-items-cente justify-content-center">
                                    <div class="t96">
                                        <input type="checkbox" name="lembrar" id="lembrarid">
                                        <label for="lembrarid" class="form-check-label bg-transparent text-light">Lembrar de mim?</label>
                                    </div>
                            </div>      
                        
                            <!-- button -->

                            <div class="d-flex justify-content-between text-center">

                                <div class="col-3 d-flex align-items-center">
                                    <a href="cadastrar.php" class="text-decoration-none t100 buttonBlue">Cadastrar</a>
                                </div>
                                <div class="col-3 d-flex align-items-center">
                                    <a href="main-page.php" class="text-decoration-none t100 buttonRed">Cancelar</a>
                                </div>
                                <div class="col-3 d-flex align-items-center">
                                    <a href="main-page.php" class="text-decoration-none t100 buttonBlue">Entrar</a>
                                </div>

                            </div>
                        </div>
                </div>
            </form>
        </div>

            <!-- footer -->
            <div>       
            <?php
            include "footer.php";
            ?>
            </div>
</body>