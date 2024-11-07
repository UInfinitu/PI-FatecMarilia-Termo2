<?php
    function listar($tabela){
        include "banco/conexao.php";

        $sql = "select * from $tabela";
        $comando = $pdo->query($sql);
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }
?>