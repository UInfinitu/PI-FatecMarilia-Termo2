<?php
    include "../../php/funcoes.php";
/*
    autenticar_admin();
*/    
    include "../../php/cabecalho.php";

?>

    <main class="container-fluid gx-0 my-5">
        <div class="container-fluid gx-0 menu-Container" id="menuAdm">
            <div id="cabecalho">
                <p><h4>Menu Admin</h4>
                <h6>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;Cadastrar Disciplina</h6></p>
            </div>
            <div class="container-fluid gx-0">
                <section class="container-fluid gx-0">
                    <form action="" class="cabeca">
                        <div  class="labeln">
                            <label for="nome">Nome: </label>
                            <input type="text" name="nome" required>
                         </div>
                        <div class="labeln">
                            <label for="carga">Carga horária: </label>
                            <input type="number" name="carga" maxlength="10" required>
                        </div>
                        <div class="labeln">
                            <label for="media">Média para passar: </label>
                            <input type="number" name="media" max="10" min="0" required>
                        </div>
                        <div class="labelr">
                            <p><a href="PagConteudo.php">&nbsp;Relacionar Conteúdo&nbsp;</a></p>
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