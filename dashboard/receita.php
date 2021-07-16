<?php
  SESSION_START();
  if(isset($_SESSION["nome"])){
    $use = $_SESSION["nome"];  
    $iduser = $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="../img/favicon.png">
        <title>Dados</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a href="fimsessao.php"><h2><i class="fas fa-sign-out-alt"></i></h2></a>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Despesas</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Geral
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="perfil.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Perfil
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-right"></i></div>
                            </a>                            
                            <a class="nav-link" href="receita.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Receita
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-right"></i></div>
                            </a>
                            <div class="sb-sidenav-menu-heading">Resumo</div>
                            <a class="nav-link" href="extrato.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Extrato
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-right"></i></i></div>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>                    
                    <div class="container-fluid">
                        <h1 class="mt-4">Olá, <?php echo $use; ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Geral</a></li>
                            <li class="breadcrumb-item active">Receita</li>
                        </ol>
                        <div class="container">
                          <div class="py-4 text-center mx-auto mb-2">
                            <h2>Receita</h2>
                          </div>                          
                        </div>

                        <form action="addreceita.php" method="POST">
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <label for="validationCustom01" class="form-label">Salário</label>
        <input type="number" class="form-control bg-info border-info" id="validationCustom01" name="cxsa" value="" required>              
                        </div>
                        
                        <div class="col-xl-3 col-md-6">
                            <label for="validationCustom01" class="form-label">Poupança</label>
        <input type="number" class="form-control bg-success border-success" id="validationCustom01" name="cxpoup" value="" required>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <label for="validationCustom01" class="form-label">Clique para salvar!</label><br>
        <button class="btn btn-outline-secondary" name="cxbusca" type="submit">Salvar <i class="fas fa-save"></i></button>
                        </div>                        
                    </div>       
                    </form>    
                    </div>
                </main>                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
<?php
  }else{
    echo "<script>
            alert('Acesso negado, efetue o login!');
            window.location.href = '../login.php'; 
          </script>";
      };
?>