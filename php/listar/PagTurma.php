<?php

include "../../php/funcoes.php";
/*
    autenticar_admin();
*/

include "../banco/conexao.php";

$sql = "SELECT t.identificadorTurma,m.tipoModalidade FROM turma t INNER JOIN modalidade m ON t.Modalidade_codigo = m.codigo ORDER BY identificadorTurma;";
$comando = $pdo->prepare($sql);
$comando->execute();
$turmas = $comando->fetchAll();

include "../../php/cabecalho.php";

?>

<main class="container-fluid gx-0 my-5">
    <div class="container-fluid gx-0 menu-Container" id="menuAdm">
        <div id="cabecalho">
            <p>
            <h4>Menu Admin</h4>
            <h6>: Listar Turma</h6>
            </p>
        </div>
        <div class="container-fluid gx-0">
            <section class="container-fluid gx-0">
                <table class="table table-hover">
                    <thead>
                        <tr class="justify-content-evenly">
                            <th>Turma</th>
                            <th>Modalidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($turmas as $turma){ ?>
                        <tr>
                            <td><?= $turma["identificadorTurma"] ?></td>
                            <td><?= $turma["tipoModalidade"] ?></td>
                            <td>
                                <a href="">Alterar</a>
                                |
                                <a href="">Excluir</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
        </div>
        <div class="labeln">
            <p><a href="../cadastros/PagAdmin.php">&nbsp;Voltar&nbsp;</a></p>
        </div>
    </div>
</main>
  
    <?php
        include "../../php/rodape.php";
    ?>
