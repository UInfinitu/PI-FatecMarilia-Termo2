<?php
    function deletar($tabela, $codigo){
        include "banco/conexao.php";

        $sql  = "DELETE FROM $tabela WHERE codigo = :codigo";
        $codigoTratado = htmlspecialchars($codigo);
        
        $comando = $pdo->prepare($sql);
        $comando->bindParam(":codigo", $codigoTratado);
        
        $sucesso = $comando->execute();

        return $sucesso;
    }
?>