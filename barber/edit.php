<?php

    if(!empty($_GET['id']))
    {   
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        // print_r($result);

        if($result->num_rows > 0)
        {
          while($user_data = mysqli_fetch_assoc($result))
          {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
          }

          // print_r($nome);
        
        }
        else
        {
          header('Location: sistema.php');
        }


    }
    else
    {
      header('Location: sistema.php');
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
    <title>Editor</title>
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

          <form action="saveEdit.php" method="POST">
            <strong>ATUALIZE seu cadastro</strong>

            <div class="name">
              <input
                id="name"
                type="text"
                name="name"
                placeholder="Nome"
                value="<?php echo $nome ?>"
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
                value="<?php echo $email ?>"
                required
                autocomplete="off"
              />
              <i class="ph ph-envelope-simple"></i>
            </div>

            <div class="password">
              <input
                id="senha"
                type="text"
                name="senha"
                placeholder="Senha"
                value="<?php echo $senha ?>"
                required
              />
              <i class="ph ph-lock-simple"></i>
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>"/>
            <input type="submit" name="update" id="update">
          </form>

          <a href="sistema.php">
            <i class="ph ph-arrow-left"></i>
            Voltar para EDIÇÃO
          </a>
        </div>
      </div>

    </div>
  </body>
</html>
