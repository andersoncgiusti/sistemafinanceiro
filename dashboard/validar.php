<?php	
	SESSION_START();
	$login = isset($_POST["cxemail"])?strtolower($_POST["cxemail"]):"";
	$senha = isset($_POST["cxsenha"])?strtolower($_POST["cxsenha"]):"";
	include_once 'conexao.php';
	$log = mysqli_query($conn, "SELECT *from tbusuario WHERE email='$login' and senha='$senha'")or die(mysql_error());
	$linha = mysqli_fetch_array($log);
	if($login == "" || $senha == ""){
		echo "<script>
				alert('Acesso restrito, efetue o login!');
				window.location.href = '../login.php';
			  </script>";
	}
	if($login != $linha["email"] && $senha != $linha["senha"]){
		echo "<script>
				alert('Acesso restrito, efetue o login!'); 
				window.location.href = '../login.php';
			  </script>";
	}	
	if($login == $linha["email"] && $senha == $linha["senha"]){
		$_SESSION["nome"]=$linha["nome"];
		$_SESSION["id"]=$linha["id"];
		echo "<script>
				alert('Acesso permitido!');			  
				window.location.href = 'index.php'; 
			  </script>";
	}else{
		echo "<script>
				alert('Acesso restrito, efetue o login!');
				window.location.href = '../login.php';
			  </script>";
	}

?>





















