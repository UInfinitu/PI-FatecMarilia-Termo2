<?php
    include "../../php/funcoes.php";
/*
    autenticar_admin();
*/    
    include "../../php/cabecalho.php";

    include "../banco/conexao.php";

    $sql = "SELECT codigo, nomeAluno FROM aluno ORDER BY nomeAluno ASC;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

    <main class="container-fluid gx-0 my-5">
        <div class="container-fluid gx-0 menu-Container" id="menuAdm">
            <div id="cabecalho">
                <p><h4>Menu Admin</h4>
                <h6>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;Cadastrar Responsável</h6></p>
            </div>
            <div class="container-fluid gx-0">
                <section class="container-fluid gx-0">
                    <form action="../intermediarios/adicionarIntermediario.php" class="cabeca">
                        <input type="hidden" name="tabela" value="responsavel">
                        <input type="hidden" name="listaCampos" value="nomeResponsavel,emailResponsavel">

                        <div  class="labeln">
                            <label for="0">Nome: </label>
                            <input type="text" name="0" required>
                        </div>
                        <div class="labeln">
                            <label for="1">Email: </label>
                            <input type="email" name="1" required>
                        </div>
                        <div class="labeln">
                            <button type="submit">Cadastrar</button>
                        </div>
                    </form>
                </section>
            </div>
            <div class="labeln">
                <button onclick="history.go(-1);">&nbsp;Voltar&nbsp;</button>
            </div>
        </div>
    </main>

    <?php
        include "../../php/rodape.php";
    ?>