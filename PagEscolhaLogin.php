<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/PagInst.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/PagAdmin.css">
    <link rel="stylesheet" href="css/estilosBasicos.css">
    <link rel="stylesheet" href="css/PagEscolha.css">
    <link rel="icon" href="img/icone_Nostro.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body id="body">
    <header>
        <nav class="navbar navbar-expand-lg" id="nav">
            <div class="container-fluid">
                <img class="navbar-brand" src="img/logo.png" alt="logo do site" id="logo">
                <img id="imgPosB" src="img/banner_Nostro.png" alt="banner Colégio Nostro">
                      <!-- Redireciona para a página de login -->
                <a class="navbar-nav mx-5" href="PagEscolhaLogin.php" id="linkLogin"> 
                    <!-- <p class="nav-item m-0" id="txtLogin">Login</p> -->
                    <img class="nav-item" src="img/login.png" alt="" id="imgLogin">
                </a>
            </div>
        </nav>
    </header>

    <main class="container-fluid my-5 row justify-content-center">
        <div id="cards">
            <div class="card mb-3">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="img/Estudantes.PNG" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Área do Aluno</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores
                                iusto officia totam perspiciatis facere! Saepe ullam expedita porro consequatur omnis
                                accusamus odit quas delectus. Explicabo obcaecati natus eligendi quam optio?</p>
                            <div class="text-end">
                                <a href="PagLogin.php" id="linkLogin"><button class="btn px-4 py-2"
                                        id="botao">Acessar</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="img/responsavel.jfif" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Área do Responsável</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores
                                iusto officia totam perspiciatis facere! Saepe ullam expedita porro consequatur omnis
                                accusamus odit quas delectus. Explicabo obcaecati natus eligendi quam optio?</p>
                            <div class="text-end">
                                <a href="PagLogin.php" id="linkLogin"><button class="btn px-4 py-2"
                                        id="botao">Acessar</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="img/professor.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Área do Professor</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores
                                iusto officia totam perspiciatis facere! Saepe ullam expedita porro consequatur omnis
                                accusamus odit quas delectus. Explicabo obcaecati natus eligendi quam optio?</p>
                            <div class="text-end">
                                <a href="PagLogin.php" id="linkLogin"><button class="btn px-4 py-2"
                                        id="botao">Acessar</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row g-0 align-items-center">
                    <div class="col-md-4">
                        <img src="img/administrativo.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Área Administrativa</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores
                                iusto officia totam perspiciatis facere! Saepe ullam expedita porro consequatur omnis
                                accusamus odit quas delectus. Explicabo obcaecati natus eligendi quam optio?</p>
                            <div class="text-end">
                                <a href="PagLogin.php" id="linkLogin"><button class="btn px-4 py-2"
                                        id="botao">Acessar</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
        include "php/rodape.php";
    ?>

</body>

</html>