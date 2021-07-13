<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />

    <link href="css/banner.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="img/favicon.png">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>SCRUM | Home</title>
  </head>
<body>

<!-- Menu -->

<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">          
        <img class="mb-4" src="img/logo.png" alt="" width="0" height="0">   <span class="fs-4">TEAM SCRUM</span>
        </a>
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="quem.php" class="nav-link px-2 text-white">Quem somos</a></li>
            <li><a href="contato.php" class="nav-link px-2 text-white">Contato</a></li>        
          </ul>
        
            <div class="text-end">
        <a href="login.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
        <a href="cadastro.php"><button type="button" class="btn btn-warning">Cadastrar</button></a>
      </div>
    </div>
  </div>
</header>

<!-- Banner -->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><img src="img/header_one.jpg"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 id="txt">É GRATUITO!</h1>
            <p>Você não precisa pagar nada para utilizar o SCRUM finanças. Basta fazer um simples cadastro e começar a controlar suas finanças.</p>
            <p><a class="btn btn-lg btn-warning" href="cadastro.php">Cadastrar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><img src="img/header_one.jpg"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>É SEGURO!</h1>
            <p>O site do SCRUM finanças possui uma política de segurança rigorosa e utiliza tecnologia avançada para garantir total segurança ao usuário. O SCRUM finanças utiliza a mesma tecnologia (SSL) dos sites de bancos. Todos os dados são criptografados antes de trafegar na internet.</p>
            <p><a class="btn btn-lg btn-warning" href="cadastro.php">Cadastrar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><img src="img/header_two.jpg"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>TOTAL CONTROLE!</h1>
            <p>Faça seu cadastro agora, e tenha o total controle de suas finanças pessoais, é totalmente gratuito</p>
            <p><a class="btn btn-lg btn-warning" href="cadastro.php">Cadastrar</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Cadastrar</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Cadastrar</span>
    </button>
  </div>

   <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img class="mb-4" src="img/relatorio.png" alt="" width="140" height="140">

        <h2>Relatórios Completos</h2>
        <p>O Scrum Master possuiu todos os relatórios necessários para a gestão de suas finanças.</p>
        <p><a class="btn btn-secondary" href="#">HOME</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
         <img class="mb-4" src="img/moderno.png" alt="" width="140" height="140">

        <h2>Design Moderno</h2>
        <p>O Scrum Master foi desenvolvido com as melhores e mais novas tecnologias disponíveis no mercado. A interface de usuário é completamente adaptável a qualquer dispositivo, computador, tablet ou smartphone.</p>
        <p><a class="btn btn-secondary" href="#">HOME</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="mb-4" src="img/dashboard.png" alt="" width="140" height="140">        

        <h2>Dashboard</h2>
        <p>A tela principal do Scrum Master, que chamamos de Dashboard é totalmente completa, com todas as principais informações necessárias para a gestão de suas finanças de forma automática, clara e precisa.</p>
        <p><a class="btn btn-secondary" href="#">HOME</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

  <!-- START THE FEATURETTES -->

<hr class="featurette-divider">

    <section>
      <!-- FOOTER -->

      <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p center>&copy; 2021  &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
      </footer>
    </section> 



    <!-- Bootstrap  -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
   
</body>
</html>