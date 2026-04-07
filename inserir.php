<?php

    include "conexao.php";

    $id = isset($_POST["id"]) ? $_POST["id"] : null;
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    
    if($id) {
        $sql = "UPDATE aluno SET nome = :nome, idade = :idade, email = :email, telefone = :telefone WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
    } else {
        $sql = "INSERT INTO aluno (nome, idade, email, telefone) VALUES (:nome, :idade, :email, :telefone)";
        $stmt = $conexao->prepare($sql);
    }
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->execute();

    header("Location:index.php");
    exit();

    


?>