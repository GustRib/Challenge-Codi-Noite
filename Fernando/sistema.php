<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    // inicio da pesquisa
    if(!empty($_GET['search']))
    {
      $data = $_GET['search'];
      $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";

    }
    else
    {
      $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }

    $result = $conexao->query($sql);

    //  print_r($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <style>
        body {
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            color: white;
            text-align: center;
            }
        
        .box-search {
          display: flex;
          justify-content: center;
          gap: 0.1%;
        }
    </style>
</head>
<body>
  
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.html">
      <img src="/assets/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Barbearia Codi
    </a>
    <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>

</nav>
<?php

  echo "<br><h1> Ola! <u> $logado</u></h1>";

?>
<br>
<div class="box-search">
  <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
  <button onclick="searchData()" class="btn btn-primary">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg>
  </button>
</div>

<div class="m-5">
<table class="table text-white">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while($user_data = mysqli_fetch_assoc($result ))
      {
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nome']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['senha']."</td>";
        echo "<td>
            <a class='btn btn-primary' href='edit.php?id=$user_data[id]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
            </svg>
            
            <a class='btn btn-danger' href='delete.php?id=$user_data[id]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
            <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
            </svg>
        </td>";
        echo "</td>";

      }

    ?>

  </tbody>
</table>
</div>
</body>
<script>
  var search = document.getElementById('pesquisar');

  search.addEventListener("keydown", function(enet) {
    if (event.key === "Enter")
    {
      searchData();
    }
  });

  function searchData()
  {
    window.location = 'sistema.php?search='+search.value;
  }

</script>
</html>