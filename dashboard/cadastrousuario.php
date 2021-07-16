<?php
	if($_POST['cxnome'] != ""){
		include_once 'conexao.php';
		$nome		= $_POST['cxnome'];
		$email		= $_POST['cxemail'];
		$cpf		= $_POST['cxcpf'];
		$senha		= $_POST['cxsenha'];
		$sql 		= "INSERT INTO tbusuario (nome, email, cpf, senha) 
		values ('$nome', '$email', '$cpf', md5('$senha'))";

		$query = mysqli_query($conn, $sql);

		echo  "<script>alert('Dados cadastrados com sucesso!'); 
				window.location.href = '../login.php' 
				</script>";

	}else{
		echo "<script>alert('Dados não cadastrados, tente novamente!'); 
		window.location.href = 'cadastrousuario.php' 
		</script>";
	}
?>