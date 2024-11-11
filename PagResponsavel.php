<?php
    include "php/funcoes.php";
/*
    autenticar_admin();
*/    
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área da Instituição</title>
    <link rel="stylesheet" href="css/PagInst.css">
    <link rel="stylesheet" href="css/PagAdmin.css">
    <link rel="stylesheet" href="css/estilosBasicos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body id="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" id="nav">
        <div class="container-fluid">
            <img class="navbar-brand" src="img/logo.png" alt="logo do site" id="logo">
            <ul id="navItens" class="navbar-nav fw-bolder">
                <li class="nav-item px-2"><a class="nav-link" href="#sectNota">Média</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="#sectProfs">Professores</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="#sectNovaTurma">Nova Turma</a></li>
            </ul>
        </div>
    </nav>

    <main class="container-fluid gx-0">

        <div class="row text-center py-4">
            <h1>(Nome da Instituição)</h1>
        </div>

        <div class="container-fluid gx-0 menu-Container" id="menuAdm">
            <div id="cabecalho">
                <p><h4>Menu Admin</h4>
                <h6>:  Cadastrar Responsável</h6></p>
            </div>
            <div class="container-fluid gx-0">
                <section class="container-fluid gx-0">
                    <form action="" class="cabeca">
                        <div  class="labeln">
                            <label for="nome">Nome: </label>
                            <input type="text" name="nome" required>
                        </div>
                        <div class="labeln">
                            <label for="email">Email: </label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="labeln">
                        </div>
                        <div class="labeln">
                            <button type="submit">Cadastrar</button>
                        </div>
                    </form>
                </section>
            </div>
            <div class="labeln">
                <button onclick="history.go(-1);">Voltar</button>
<!--                <p><a href="PagAdmin.php">Voltar</a></p>-->
            </div>
        </div>
    </main>
  
    <footer class="container-fluid gx-0" id="backg">
            <section class="container-fluid">
                <address>
                    <div class="col col-6">
                        <p>&copy; 2024. Todos os direitos reservados</p>
                    </div>
                    <div class="col col-6">
                        <p> Powered by: Grupo Airazor</p>
                    </div>
                </address>
            </section>
    </footer>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/PagInst.js"></script>
</body>

</html>