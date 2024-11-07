<?php
    include "php/funcoes.php";

    autenticar_admin();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área da Instituição</title>
    <link rel="stylesheet" href="css/PagInst.css">
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

    <main class="container-fluid">

        <div class="row text-center py-5">
            <h1>(Nome da Instituição)</h1>
        </div>

        <!-- Atribuidor de média -->
        <section class="row justify-content-center p-5 m-1" id="sectNota">
            <h2>Média <a href="javascript:;" id="slide1">v</a></h2>
            <form action="javascript:;" id="nota" class="row justify-content-evenly align-items-center">
                <label class="form-label col-9" for="media">Atribuir média escolar: </label>
                <input class="form-control col-3" type="number" name="media" id="media" max="10" min="0">
            </form>
        </section>

        <!-- Professores -->
        <section class="p-5 my-3" id="sectProfs">
            <h2>Professores <a href="javascript:;" id="slide2">v</a></h2>
            <div id="profs">
                <div class="row justify-content-beetwen p-2 g-2" id="profsExist"></div>

                <!-- Adicionar professor -->
                <div class="row justify-content-center">
                    <div class="col-6 col-md-3 text-center">
                        <form class="needs-validation" novalidate>
                            <div class="input-group flex-nowrap">
                                <input class="form-control" type="text" id="novoProfNome" placeholder="Novo Professor"
                                    required minlength="4" maxlength="29">
                                <button class="btn" id="adicionarProf" type="reset">+</button>
                            </div>
                            <div class="invalid-feedback"></div>
                        </form>
                    </div>
                </div>

            </div>
        </section>

        <!-- Adicionando turma -->
        <section class="p-5 my-3" id="sectNovaTurma">
            <h2>Nova Turma <a href="javascript:;" id="slide3">v</a></h2>
            <br><br>
            <div class="row justify-content-center" id="novaTurma">
                <form class="fw-bold" action="javascript:;" id="formTurma">

                    <label class="form-label" for="profs">Professor: </label>
                    <!-- É auto-preenchido pelo JS -->
                    <select class="form-select" name="profs" id="itemForm"></select>

                    <label class="form-label" for="profs">Matéria: </label>
                    <select class="form-select" name="mat" id="itemForm">
                        <option value="nan">Selecione a matéria</option>
                        <option value="port">Português</option>
                        <option value="Mate">Matematica</option>
                        <option value="hist">História</option>
                        <option value="geog">Geografia</option>
                        <option value="biol">Biologia</option>
                        <option value="fisi">Física</option>
                        <option value="quim">Química</option>
                        <option value="ingl">Inglês</option>
                    </select>
                    
                    <label class="form-label" for="turma">Nome da Turma: </label>
                    <input class="form-control" type="text" placeholder="Digite o nome da turma" id="itemForm"
                        name="turma">
                    <br>
                    <div class="row justify-content-end" id="cxBtnForm">
                        <button class="btn" type="reset" id="btnForm">Criar turma</button>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <h2>Cadastrar Aluno</h2>
            <form action="">
                <div>
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" required>
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <button type="button">Adicionar Responsável</button>
                </div>
                <div>
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </section>

        <section>
            <h2>Cadastrar Responsável</h2>
            <form action="">
                <div>
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" required>
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </section>

        <section>
            <h2>Cadastrar Professor</h2>
            <form action="">
                <div>
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" required>
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label for="titulacao">Titulação: </label>
                    <select name="titulacao">
                        <option value="nan" selected>Selecione sua titulação</option>
                        <option value="ng">Não-Graduado</option>
                        <option value="g">Graduado</option>
                        <option value="m">Mestre</option>
                        <option value="d">Doutor</option>
                    </select>
                </div>
                <div>
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </section>

        <section>
            <h2>Cadastrar Disciplina</h2>
            <form action="">
                <div>
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" required>
                </div>
                <div>
                    <label for="carga">Carga horário: </label>
                    <input type="number" name="carga" required>
                </div>
                <div>
                    <label for="media">Média para passar: </label>
                    <input type="number" name="media" max="10" min="0" required>
                </div>
                <div>
                    <button type="button">Adicionar Conteúdo</button>
                </div>
                <div>
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </section>

        <section>
            <h2>Cadastrar Conteúdo</h2>
            <form action="">
                <div>
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" required>
                </div>
                <div>
                    <label for="carga">Carga horário: </label>
                    <input type="number" name="carga" required>
                </div>
                <div>
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </section>
    </main>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/PagInst.js"></script>
</body>

</html>