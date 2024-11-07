<?php
    function adicionar($tabela, $listacampos, $listavalores){
        include "banco/conexao.php";

        $listaPlaceholders = [];
        $listaValoresSeguros = [];

        $sql  = "INSERT INTO $tabela (";
        $sql .= implode(",", $listacampos);
        $sql .= ") VALUES (";
        for ($i = 0; $i < count($listacampos); $i++) {
            $listaPlaceholders[$i] = ":$listacampos[$i]";
        }
        $sql .= implode(",", $listaPlaceholders);
        $sql .= ");";

        for ($i = 0; $i < count($listavalores); $i+=1){
            $listaValoresSeguros[$i] = htmlspecialchars($listavalores[$i]);
        }

        $comando = $pdo->prepare($sql);

        for ($i = 0; $i < count($listacampos); $i++){
            $comando->bindParam(":$listacampos[$i]", $listaValoresSeguros[$i]);
        }
        
        $sucesso = $comando->execute();

        return $sucesso;
    }
?>