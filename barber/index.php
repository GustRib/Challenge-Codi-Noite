<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Barbearia Codi</title>
  <link rel="stylesheet" href="./assets/css/styles.css" />
</head>

<body>
  <header>
    <nav>
      <h1>Barbearia Codi Academy</h1>

      <ul>
        <li><a onclick="handleMobile()" href="#home">Home</a></li>
        <li><a onclick="handleMobile()" href="#service">Serviços</a></li>
        <li><a onclick="handleMobile()" href="#barbers">Equipe</a></li>
        <li><a onclick="handleMobile()" href="#contact">Contato</a></li>
        <li><a onclick="handleMobile()" href="login.php">Entrar</a></li>
        <li><a onclick="handleMobile()" href="register.php">Cadastre-se</a>
        </li>
      </ul>

      <button onclick="handleMobile()" class="mobile">
        <div></div>
        <div></div>
        <div></div>
      </button>
    </nav>
  </header>

  <main>
    <section id="home" class="banner">
      <div class="effect"></div>
      <div class="text">
        <h2>Barba e Cabelo para Homens Modernos</h2>
        <a style="width: 14rem; font-size: 0.875rem;" href="login.php">Agende já sua visita</a>
      </div>
    </section>

    <section id="service">
      <h2>Nossos Serviços</h2>
      <div class="box-content">
        <div class="content">
          <h3>Corte de Cabelo</h3>
          <p>
            Aqui na Barbearia Codi, oferecemos cortes de cabelo modernos e
            estilosos que vão deixar você se sentindo incrível.
          </p>
        </div>
        <img src="https://images.unsplash.com/photo-1493256338651-d82f7acb2b38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" />
      </div>
      <div class="box-content flex-col">
        <img src="https://images.unsplash.com/photo-1596728325488-58c87691e9af?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=873&q=80" />
        <div class="content">
          <h3>Barba</h3>
          <p>
            Com nossos profissionais especializados em barba, você pode ter
            certeza de que sairá daqui com a barba dos seus sonhos.
          </p>
        </div>
      </div>
      <div class="box-content">
        <div class="content">
          <h3>Cabelo e Barba</h3>
          <p>
            Precisa de um corte de cabelo e barba? Nós cuidamos de tudo para
            você no mesmo horário, economizando seu tempo e dinheiro.
          </p>
        </div>
        <img src="https://images.unsplash.com/photo-1622288432450-277d0fef5ed6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" />
      </div>
    </section>

    <section id="barbers">
      <h2>Nossa Equipe</h2>

      <swiper-container class="mySwiper" navigation="true">
        <swiper-slide>
          <div class="barbeiro">
            <img src="https://images.unsplash.com/photo-1553519367-2b1993d992dc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" />
            <h3>Nancy Lee</h3>
            <p>
              Com mais de 10 anos de experiência em barbearia, Nancy é uma das
              melhores barbeiras da cidade.
            </p>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="barbeiro">
            <img src="https://images.unsplash.com/photo-1512864084360-7c0c4d0a0845?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" />
            <h3>Lebron James</h3>
            <p>
              Com mais de 10 anos de experiência em barbearia, Lebron é uma
              das melhores barbeiras da cidade.
            </p>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="barbeiro">
            <img src="https://images.unsplash.com/photo-1516646720587-727f6728837d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" />
            <h3>Carlos Santos</h3>
            <p>
              Carlos é um especialista em cabelo e barba, sempre mantendo-se
              atualizado nas últimas tendências da moda masculina.
            </p>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="barbeiro">
            <img src="https://images.unsplash.com/photo-1588771930296-88c2cb03f386?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=836&q=80" />
            <h3>John Esteves</h3>
            <p>
              John é um jovem talentoso, sempre buscando inovar e surpreender
              seus clientes com cortes e estilos únicos.
            </p>
          </div>
        </swiper-slide>
      </swiper-container>
    </section>

    <section id="contact">
      <h2>Entre em Contato</h2>
      <div class="wrapper">
        <form action="enviar.php" method="post">
          <label for="nome">Nome:</label>
          <input placeholder="Digite seu nome" type="text" id="nome" name="nome" required />

          <label for="email">E-mail:</label>
          <input placeholder="Digite seu email" type="email" id="email" name="email" required />

          <label for="telefone">Telefone:</label>
          <input placeholder="Digite seu e-mail" type="tel" id="telefone" name="telefone" required />

          <label for="mensagem">Mensagem:</label>
          <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem" required></textarea>

          <button type="submit">Enviar</button>
        </form>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.018949703958!2d-43.37807872569744!3d-21.77952759855689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989ba4f5d4d0e3%3A0xce26e835a31bd3fc!2sCRITT%20-%20Juiz%20de%20Fora%2C%20MG!5e0!3m2!1spt-BR!2sbr!4v1683756634563!5m2!1spt-BR!2sbr" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; Barbearia Codi Academy - Todos os direitos reservados</p>
  </footer>

  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>

</html>