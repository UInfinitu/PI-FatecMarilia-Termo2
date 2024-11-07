<?php
    function alterar($tabela, $listacampos, $listavalores){
        include "banco/conexao.php";

        $listaPlaceholders = [];
        $listaValoresSeguros = [];

        $sql  = "UPDATE $tabela SET ";
        for ($i = 1; $i < count($listacampos); $i++) {
            $listaPlaceholders[] = "$listacampos[$i] = :$listacampos[$i]";
        }
        $sql .= implode(", ", $listaPlaceholders);
        $sql .= "WHERE $listacampos[0] = :$listacampos[0]";

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