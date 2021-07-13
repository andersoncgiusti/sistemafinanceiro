<?php 
      SESSION_START();
      include_once 'conexao.php';

      $nomeusuario     = $_SESSION["nome"];
      $estabelecimento = $_POST["cxestabelecimento"];
      $data            = $_POST["cxdata"];
      $valor           = $_POST["cxvalor"];
      $forma           = $_POST["cxforma"];
      $alterar = "UPDATE tbextrato SET
        nome = '$estabelecimento', 
        estabelecimento = '$nomeusuario ', 
        data            = '$data', 
        valor           = '$valor', 
        forma           = '$forma'";   
      $executar = mysqli_query($conn, $alterar); 
      if ($alterar) {
        echo "<script>alert('Alterado com sucesso!'); 
            window.location.href = 'extrato.php' 
            </script>";
      }else{
        echo "<script>alert('Não foi possível alterar, verifique novamente!'); 
            window.location.href = 'extrato.php' 
            </script>"; 
      }
    ?>