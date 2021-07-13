<?php 
      SESSION_START();
      include_once 'conexao.php';

      $nomeusuario     = $_SESSION["nome"];
      $salario   = $_POST["cxsalario"];
      $poupanca  = $_POST["cxpoupanca"];
      $alterar = "UPDATE tbreceita SET
        nome      = '$nomeusuario', 
        salario   = '$salario',  
        poupanca  = '$poupanca'";   
      $executar = mysqli_query($conn, $alterar); 
      if ($alterar) {
        echo "<script>alert('Alterado com sucesso!'); 
            window.location.href = 'index.php' 
            </script>";
      }else{
        echo "<script>alert('Não foi possível alterar, verifique novamente!'); 
            window.location.href = 'index.php' 
            </script>"; 
      }
    ?>