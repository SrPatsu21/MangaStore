<?php
$title = "Cadastrar Admin";
include "header.php";
?>

<script>
    var urlParams = new URLSearchParams(window.location.search);
    var msg = urlParams.get('msg');
    if (msg == 0) {
        window.alert("cadastrado com sucesso");
    }
</script>
<div class="container mt-3 mb-3 bg-gray2 p-3 rounded-3">

    <form action="cadastroUsuario.php" method="post" class="needs-validation h100" novalidate >

                <div class="mb-3">
                    <label for="idLogin" class="form-label bg-gray2">Login</label>
                    <input type="text" name="login" id="idLogin" class="form-control bg-gray3" required>
                    <script>
                        var urlParams = new URLSearchParams(window.location.search);
                        var msg = urlParams.get('msg');
                        if (msg == 1) {
                            document.write('<p class="text-danger text-uppercase fw-bolder">Usuario ja existente</p>');
                        }
                    </script>
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

                <div class="mb-3">
                    <label for="idSenha2" class="form-label bg-gray2">confirme sua Senha</label>
                    <input type="password" name="senha2" id="idSenha2" class="form-control bg-gray3" required>
                    <script>
                        var urlParams = new URLSearchParams(window.location.search);
                        var msg = urlParams.get('msg');
                        if (msg == 2) {
                            document.write('<p class="text-danger text-uppercase fw-bolder">senhas incoerentes</p>');
                        }
                    </script>
                    <div class="invalid-feedback">
                        senha invalido
                    </div>
                </div>

                

                <div class="d-flex justify-content-between m-2 mt-auto">
                <a role="button" href="indexAdmin.php" class="bg-white btn btn-outline-danger m-1 t40">Sair</a>
                <button type="submit" class="bg-white btn btn-outline-success m-1 t40">Cadastrar</button>
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

    </form>

</div>

<?php
include "footer.php";
?>