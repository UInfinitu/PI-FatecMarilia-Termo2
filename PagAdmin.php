<?php
    include "php/funcoes.php";
    /*
            autenticar_admin();
        */
    include "php/cabecalho.php";

?>

    <main class="container-fluid">

        <div class="row text-center py-4">
            <!-- <h1>(Nome da Instituição)</h1> -->
        </div>

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
                <a href="PagLogin.php" class="active">&nbsp;&nbsp;Sair&nbsp;&nbsp;</a>
            </div>
        </div>

    </main>

    <?php
        include "php/rodape.php";
    ?>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/PagInst.js"></script>
    </body>

</html>