<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/PagInst.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/PagAdmin.css">

    <link rel="stylesheet" href="css/estilosBasicos.css">
    <link rel="stylesheet" href="css/PagLogin.css">
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

    <main class="d-flex justify-content-center">
        <form action="php/validar.php" method="POST" id="login" class="col-sm-6 col-md-5 col-lg-4">
            <h1 class="text-center mb-4">Login</h1>
            <input class="form-control mb-3" type="text" placeholder="Usuário" id="user" name="user">
            <input class="form-control mb-4" type="password" placeholder="Senha" id="senha" name="senha">
            <button id="botao" class="btn col-12" type="submit">Entrar</button>
        </form>
    </main>
    
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/poslogin.js"></script>
</body>

</html>