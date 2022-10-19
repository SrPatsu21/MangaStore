
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bg-gray text-light">
<main class="d-flex justify-content-center t100 align-items-center" style="height:85vh">
    <div class="container mt-3 mb-3 bg-gray2 p-3 rounded-3">

        <form action="provarLogin.php" method="post" class="needs-validation" novalidate >

            <div class="mb-3">
                <label for="idLogin" class="form-label bg-gray2">Login</label>
                <input type="text" name="login" id="idLogin" class="form-control bg-gray3" value="" required>
                <div class="invalid-feedback">
                    usuario invalido
                </div>
            </div>

            <div class="mb-3">
                <label for="idSenha" class="form-label bg-gray2">Senha</label>
                <input type="password" name="senha" id="idSenha" class="form-control bg-gray3" required>
                <div class="invalid-feedback">
                senha invalido
                </div>
            </div>


            <div class="d-flex justify-content-between m-2 mt-0">
            <a role="button" href="../frontEnd/main-page.php" class="bg-white btn btn-outline-danger m-1 t40">Sair</a>
            <button type="submit" class="bg-white btn btn-outline-success m-1 t40">Login</button>
            </div>

            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                    }, false)
                })
                })()
            </script>

            <script>
                var urlParams = new URLSearchParams(window.location.search);
                var msg = urlParams.get('msg');
                if (msg == 1) {
                    window.alert("senha ou login errados")
                }
            </script>

        </form>
    </div>
</main>
<?php
include "footer.php";
?>