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
        <title>Painel</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script> 
        <?php include_once 'conexao.php'; ?>       
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
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <?php 
                          $consultar = "SELECT *from tbreceita WHERE id = '$iduser'";
                          $executar = mysqli_query($conn, $consultar);
                          $linha = mysqli_fetch_assoc($executar);
                    ?>   
                    <form action="alterareceita.php" method="POST">
                    <div class="row">
                        
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Salário</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <input type="number" class="form-control bg-info border-info" id="validationCustom01" name="cxsa" value="<?php echo $linha['salario']; ?>" >                   
                                </div>
                            </div>
                        </div>                        
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Poupança</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                <input type="number" class="form-control bg-success border-success" id="validationCustom01" name="cxpoup" value="<?php echo $linha['poupanca']; ?>" >
                                </div>
                            </div>
                        </div>
                        <?php
                            $resultado = mysqli_query($conn, "SELECT sum(valor) as total FROM tbextrato WHERE id = '$iduser'");
                            $linha = mysqli_num_rows($resultado);
                            while($linha = mysqli_fetch_array($resultado)){
                        ?>  
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Despesas</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <input readonly type="text" class="form-control bg-warning border-warning" id="validationCustom01" name="cxdespesas" value="<?php echo 'R$ '.$linha['total']; ?>" >
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php 
                            $resultado = mysqli_query($conn, "SELECT ((SELECT salario FROM tbreceita WHERE id = '$iduser') - (sum(valor))) as total FROM tbextrato WHERE id = '$iduser'");
                            $linha = mysqli_num_rows($resultado);
                            while($linha = mysqli_fetch_array($resultado)){                      

                        ?>  
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">Saldo</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <input readonly type="text" class="form-control bg-secondary border-secondary" id="validationCustom01" name="cxsalario" value="<?php echo 'R$ '.$linha['total']; ?>" >
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-md-4 mb-3 mt-1">                            
                            <button class="btn btn-outline-primary" name="cxbusca" type="submit">Alterar <i class="fas fa-pen-alt"></i></button>                                
                        </div>
                    </div>
                    
                    </form>
                        <div class="container">
                          <div class="py-4 text-center mx-auto mb-2">
                            <h2>Adicione seu gasto abaixo</h2>
                          </div>                          
                        </div>
                        <form action="addextrato.php" method="POST">
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <label for="validationCustom01" class="form-label">Estabelecimento</label>
                            <input type="text" class="form-control border-warning" id="validationCustom01" name="cxestabelecimento" value="" required>              </div>
                        <div class="col-xl-3 col-md-6">
                            <label for="validationCustom01" class="form-label">Data da compra</label>
                            <input type="date" class="form-control border-warning" id="validationCustom01" name="cxdata" value="" required>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <label for="validationCustom01" class="form-label">Valor</label>
                            <input min="0" type="number" class="form-control border-warning" id="validationCustom01" name="cxvalor" placeholder="R$ 0,00"  value="" required>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <label for="validationCustom01" class="form-label">Forma de pagamento</label>
                            <input type="text" class="form-control border-warning" id="validationCustom01" name="cxforma" value="" required>                    
                        </div>
                        <br>
                        <div class="col-md-4 mb-3 mt-1">                            
                            <button class="btn btn-outline-success" name="cxbusca" type="submit">Adicionar <i class="fas fa-plus"></i></i></button>
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