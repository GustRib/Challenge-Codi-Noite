<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE usuarios SET nome='$nome',senha='$senha',email='$email' WHERE  id='$id'";

    $result = $conexao->query($sqlUpdate);
}

header('Location: sistema.php');
 
?>