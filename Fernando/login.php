<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/login.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Login</title>
</head>

<body>
  
    <div class="container">
        <header>
            <p>Incrível</p>
            <h1 id="title">Barbearia Codi</h1>
            <p>Cortes de Cabelo & Barba</p>
        </header>

        <h2>Faça seu Login</h2>
        <form action="testLogin.php" method="POST">
            <div>
                <input type="text"  name="email" placeholder="Email">
                <i class="ph ph-envelope-simple"></i>
            </div>
            <div>
                <input type="password"  name="senha" placeholder="Senha">
                <i class="ph ph-lock-simple"></i>
            </div>
            <!-- <button type="button">Entrar</button> -->
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    
            <a href="">Esqueci minha senha</a>
            <a id="criar__conta" href="/register.php">Criar conta</a>
        </form>

    </div>
</body>
</html>