<?php

    include "conexao.php";
    $sql = "INSERT INTO aluno (nome, idade, email, telefone) VALUES (:nome, :idade, :email, :telefone)";

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->execute();

    header("Location:index.php");

    


?>