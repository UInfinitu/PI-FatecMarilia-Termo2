<?php
    include "../funcoes.php";
    /*
            autenticar_admin();
        */
    include "../cabecalho.php";

?>

    <main class="container-fluid my-5">
        <div class=" container-fluid menu-Container" id="menuAdm">
            <h2>Menu Administração</h2>
            <div class="menu-Card">
                <a href="PagProfessor.php">> Professor</a>
                <a href="PagDisciplina.php">> Disciplina</a>
                <a href="PagConteudo.php">> Conteúdo</a>
                <a href="#">> Turma - desenvolver&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <a href="PagAluno.php">> Aluno&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <a href="PagResponsavel.php">> Responsável</a>
            </div>
            <div class="labeln">
                <a href="../../PagLogin.php" class="active">&nbsp;&nbsp;Sair&nbsp;&nbsp;</a>
            </div>
        </div>
    </main>

    <?php
        include "../rodape.php";
    ?>