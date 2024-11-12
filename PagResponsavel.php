<?php
    include "php/funcoes.php";
/*
    autenticar_admin();
*/    
    include "php/cabecalho.php";

?>

    <main class="container-fluid gx-0">

        <div class="row text-center py-4">
            <!-- <h1>(Nome da Instituição)</h1> -->
        </div>

        <div class="container-fluid gx-0 menu-Container" id="menuAdm">
            <div id="cabecalho">
                <p><h4>Menu Admin</h4>
                <h6>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;Cadastrar Responsável</h6></p>
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
                <button onclick="history.go(-1);">&nbsp;Voltar&nbsp;</button>
            </div>
        </div>
    </main>
    <div class="labeln">
        <p>&nbsp;</p>
    </div>

    <?php
        include "php/rodape.php";
    ?>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/PagInst.js"></script>
</body>

</html>