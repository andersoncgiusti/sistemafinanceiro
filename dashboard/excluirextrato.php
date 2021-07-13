<?php
	include_once 'conexao.php';

	$cod = $_GET["id"];
	$excluir = "DELETE from tbextrato WHERE id = '$cod' ";
	$executar = mysqli_query($conn, $excluir); 
	if ($executar) {
		echo "<script>alert('Excluído com sucesso!'); 
				window.location.href = 'extrato.php' 
				</script>";
	}else{
		echo "<script>alert('Não foi possível excluir, verifique novamente!'); 
				window.location.href = 'extrato.php' 
				</script>";
	}


?>