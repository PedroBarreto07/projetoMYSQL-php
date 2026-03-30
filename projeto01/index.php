<?php

     include 'conexao.php';

     $sql = "select * from aluno";
     $consulta = $conexao->query($sql);
     

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <form action="inserir.php" method="POST">
        Nome: <input type="text" name="nome">
        Idade: <input type="number" name="idade">
        Email: <input type="email" name="email">
        Telefone: <input type="text" name="telefone">
        <input type="submit" value="Salvar">
    </form>
    <br><br>
    
    


      <table width="100%" border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Excluir</th>

        </tr>

        <?php
            while ($linha = $consulta->fetch(PDO::FETCH_OBJ)){
        ?>
            <tr>
                <td><?php echo $linha->id ?></td>
                <td><?php echo $linha->nome ?></td>
                <td><?php echo $linha->idade ?></td>
                <td><?php echo $linha->email ?></td>
                <td><?php echo $linha->telefone ?></td>
                <td><a href="excluir.php?id=<?php echo $linha->id ?>">Excluir</a></td>
            </tr>
        <?php
            }
        ?>
       </table>
       
    

    
</body>
</html>