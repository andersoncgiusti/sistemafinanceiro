<?php
  if($_POST['cxcpf'] == $_POST['cxcpf']){
    include_once 'conexao.php';

     $senha     = $_POST["cxsenha"];
     $alterar = "UPDATE tbusuario SET senha = '$senha'";   
     $executar = mysqli_query($conn, $alterar); 
   
    if ($alterar) {
      echo "<script>alert('Senha alterada com sucesso!'); 
          window.location.href = '../login.php' 
          </script>";
    }else{
      echo "<script>alert('CPF não existe, verifique novamente!'); 
              window.location.href = '../recuperar.php' 
            </script>"; 
    }
  } 
?>