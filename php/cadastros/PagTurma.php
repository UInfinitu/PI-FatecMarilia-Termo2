<?php

include "../../php/funcoes.php";
/*
    autenticar_admin();
*/

include "../banco/conexao.php";

// Consulta para obter as modalidades
$sqlModalidades = "SELECT codigo, tipoModalidade FROM modalidade ORDER BY tipoModalidade ASC;";
$stmtModalidades = $pdo->prepare($sqlModalidades);
$stmtModalidades->execute();
$modalidades = $stmtModalidades->fetchAll(PDO::FETCH_ASSOC);

include "../../php/cabecalho.php";

?>

    <main class="container-fluid gx-0 my-5">
        <div class="container-fluid gx-0 menu-Container" id="menuAdm">
            <div id="cabecalho">
                <p><h4>Menu Admin</h4>
                <h6>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;Cadastrar Turma</h6></p>
            </div>
            <div class="container-fluid gx-0">
                <section class="container-fluid gx-0">
                    <form action="../intermediario.php" class="cabeca">
                        <input type="hidden" name="tabela" value="turma">
                        <input type="hidden" name="listaCampos" value="identificadorTurma,Modalidade_codigo">

                        <div class="labeln">
                            <label for="0">Identificador: </label>
                            <input type="text" name="0" required>
                        </div>
                        <div class="labeln">
                            <label for="1">Modalidade: </label>
                            <select name="1" required>
                                <option value="nan" selected>Selecione uma modalidade</option>
                                <?php foreach ($modalidades as $modalidade) { ?>
                                    <option value="<?= $modalidade["codigo"] ?>"><?= $modalidade["tipoModalidade"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="labeln">
                            <button type="submit">Cadastrar</button>
                        </div>
                    </form>
                </section>
            </div>
            <div class="labeln">
                <p><a href="PagAdmin.php">&nbsp;&nbsp;Voltar&nbsp;&nbsp;</a></p>
            </div>
        </div>
    </main>
  
    <?php
        include "../../php/rodape.php";
    ?>
