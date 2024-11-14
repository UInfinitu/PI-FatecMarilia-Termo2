<?php
    include "../funcoes.php";
    /*
            autenticar_admin();
    */
    include "../cabecalho.php";
?>

    <main class="container-fluid gx-0 my-5">
        <div class="container-fluid gx-0 menu-Container" id="menuAdm">
            <div id="cabecalho">
                <p><h4>Menu Admin</h4>
                <h6>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;Cadastrar Professor</h6></p>
            </div>
            <div class="container-fluid gx-0">
                <section class="container-fluid gx-0">
                    <form action="../intermediarios/adicionarIntermediario.php" class="cabeca">
                        <input type="hidden" name="tabela" value="professor">
                        <input type="hidden" name="listaCampos" value="nomeProfessor,emailProfessor,titulacao">

                        <div  class="labeln">
                            <label for="0">Nome: </label>
                            <input type="text" name="0" required>
                        </div>
                        <div class="labeln">
                            <label for="1">Email: </label>
                            <input type="email" name="1" required>
                        </div>
                        <div class="labeln">
                            <label for="2">Titulação: </label>
                            <select name="2">
                                <option value="nan" selected>Selecione sua titulação</option>
                                <option value="ng">Não-Graduado</option>
                                <option value="g">Graduado</option>
                                <option value="e">Especialista</option>
                                <option value="m">Mestre</option>
                                <option value="d">Doutor</option>
                                <option value="pd">Pós-Doutorado</option>
                            </select>
                        </div>
                        <!--
                        <div  class="labeln">
                            <label for="3">Coordenador (S / N): </label>
                            <input type="text" name="3" maxlength="1" required>
                        </div>
                        -->
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
        include "../rodape.php";
    ?>

    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../js/PagInst.js"></script>
</body>

</html>