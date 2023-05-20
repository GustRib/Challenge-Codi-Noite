<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['name']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Senha: ' . $_POST['senha']);
        // print_r('<br>');
        

        include_once('config.php');

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
       

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) 
        VALUES ('$nome','$email', '$senha')");

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="assets/css/register.css" />
  </head>
  <body>
    <div id="app">

      <div class="bg-image"></div>

      <div class="container-form">
        <div class="form-box">
          <header>
            <h1>Barbearia Codi <span>Academy</span></h1>
          </header>

          <form action="register.php" method="POST">
            <strong>Realize seu cadastro</strong>

            <div class="name">
              <input
                id="name"
                type="text"
                name="name"
                placeholder="Nome"
                required
                autocomplete="off"
              />
              <i class="ph ph-user"></i>
            </div>

            <div class="email">
              <input
                id="email"
                type="email"
                name="email"
                placeholder="E-mail"
                required
                autocomplete="off"
              />
              <i class="ph ph-envelope-simple"></i>
            </div>

            <div class="password">
              <input
                id="senha"
                type="password"
                name="senha"
                placeholder="Senha"
                required
              />
              <i class="ph ph-lock-simple"></i>
            </div>

            <input type="submit" name="submit" id="submit">
          </form>

          <a href="login.php">
            <i class="ph ph-arrow-left"></i>
            Voltar para o login
          </a>
        </div>
      </div>

    </div>
  </body>
</html>
