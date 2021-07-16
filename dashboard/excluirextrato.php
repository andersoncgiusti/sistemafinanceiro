<?php
	include_once 'conexao.php';

	$id      = $_GET["id"];
	$excluir = "DELETE from tbextrato WHERE idextrato = '$id' ";
	$executar = mysqli_query($conn, $excluir); 
	if ($executar) {
		echo "<script> 
				window.location.href = 'extrato.php' 
			  </script>";
	}else{
		echo "<script>alert('Não foi possível excluir, verifique novamente!'); 
				window.location.href = 'extrato.php' 
			  </script>";
	}


?>