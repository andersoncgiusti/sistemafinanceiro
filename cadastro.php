<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
    <!-- Script -->
    <script src="js/jquery.js"></script>
    <script src="js/default.js?v=1"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">

    <title>SCRUM | Cadastrar</title>
  </head>
  <body>    
    <main class="form-signin text-center">
      <form method="POST" action="dashboard/cadastrousuario.php">
      <img class="mb-4" src="img/logo.png" alt="" width="180" height="180">    
        <h3 class="txt mb-3">Seja, Bem-vindo!</h3>
        <h3 class="txt mb-3">Realize seu cadastro</h3>

        <div class="form-floating">
          <input type="text" class="form-control border border-warning rounded-0 border-bottom-0 rounded-top" id="floatingName"  name="cxnome" placeholder="Digite o nome completo" required="Digite o nome completo">
          <label for="floatingInput">Nome</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control border border-warning rounded-0 " id="floatingInput"  name="cxemail" placeholder="E-mail" required="E-mail">
          <label for="floatingInput">name@example.com</label>
        </div>
        <div class="form-floating">
          <input type="text" max="11" class="form-control border border-warning rounded-0 " id="floatingInput"  name="cxcpf" placeholder="Ex: 12345678911" required="Ex: 12345678911">
          <label for="floatingInput">CPF</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control border border-warning border-top-0" id="floatingPassword" name="cxsenha" placeholder="Password" required>
          <label for="floatingPassword">Senha</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-warning" type="submit">Cadastrar</button>
        <p class="mt-5 mb-3 text-white">&copy; 2021</p>
      </form>
    </main>    
  </body>
</html>