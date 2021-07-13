<?php   
      include_once 'conexao.php';

      $id     = $_POST["cxid"];
      $nome   = $_POST["cxnome"];
      $email  = $_POST["cxemail"];
      $cpf    = $_POST["cxcpf"];
      $senha  = $_POST["cxsenha"];
      $alterar = "UPDATE tbusuario SET 
        nome   = '$nome', 
        email  = '$email', 
        cpf    = '$cpf',
        senha  = '$senha'
          WHERE id = '$id'";   
      $executar = mysqli_query($conn, $alterar); 
      if ($alterar) {
        echo "<script>alert('Alterado com sucesso!'); 
            window.location.href = 'perfil.php' 
            </script>";
      }else{
        echo "<script>alert('Não foi possível alterar, verifique novamente!'); 
            window.location.href = 'perfil.php' 
            </script>"; 
      }
    ?>