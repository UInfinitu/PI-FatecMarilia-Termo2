<?php

    $tipo_banco = "mysql";
    $servidor = "localhost"; // Endereço do servidor
    $porta = 3306; // Número da porta do servidor
    $banco = "boletimonline"; // Nome do banco de dados a ser usado
    $usuario = "php"; // Usuário que acessará o banco
    $senha = "senha123"; // Senha cadastrada na criação do BD

    $dsn = "$tipo_banco:host=$servidor;dbname=$banco;port=$porta";

    try{
        $pdo = new PDO($dsn, $usuario, $senha);
    }catch (PDOException $e){
        throw new PDOException($e->getMessage(), $e->getCode());
    }

?>