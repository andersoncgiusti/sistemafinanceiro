<?php 
      SESSION_START();
      include_once 'conexao.php';

      $id        = $_SESSION["id"];
      $salario   = $_POST["cxsa"];
      $poupanca  = $_POST["cxpoup"];
      $alterar = "UPDATE tbreceita SET 
        id        = '$id',         
        salario   = '$salario',  
        poupanca  = '$poupanca'
          WHERE id = '$id'";   
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