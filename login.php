<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

     <link href="css/style.css" rel="stylesheet">

    <link rel="icon" href="img/favicon.png">

    <title>SCRUM | Login</title>
  </head>
<body>

  <!-- Login -->

  <main class="form-signin text-center">    
    <form action="dashboard/validar.php" method="POST">
      <img class="mb-4" src="img/logo.png" alt="" width="180" height="180">    
      <h3 class="txt mb-3">Olá, faça seu login</h3>
      <div class="form-floating">
        <input type="email" class="form-control border border-warning" id="floatingInput" name="cxemail" placeholder="name@example.com">
        <label for="floatingInput">name@example.com</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control border border-warning" id="floatingPassword" name="cxsenha" placeholder="Senha">
        <label for="floatingPassword">Senha</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar-me
        </label>
        <a href="recuperar.php" class="nav-link px-2 text-warning">Esqueceu sua senha?</a>
      </div>
      <button class="w-100 btn btn-lg btn-warning" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-white">&copy; 2021</p>
    </form>
  </main>
    
</body>
</html>