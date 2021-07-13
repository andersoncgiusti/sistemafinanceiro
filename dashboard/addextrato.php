<?php
	SESSION_START();
	if($_POST['cxestabelecimento'] != ""){
		include_once 'conexao.php';

		$nomeusuario     = $_SESSION["nome"];
	    $estabelecimento = $_POST["cxestabelecimento"];
        $data            = $_POST["cxdata"];
        $valor           = $_POST["cxvalor"];
        $forma           = $_POST["cxforma"];
	    $sql    = "INSERT INTO tbextrato (nomeusuario, estabelecimento, data, valor, forma) 
		values ('$nomeusuario', '$estabelecimento', '$data', '$valor ', '$forma')";

		$query = mysqli_query($conn, $sql);

		echo  "<script>
					alert('Gasto adicionado com sucesso!');
					window.location.href = 'index.php'
			   </script>";

	}else{
		echo "<script>
					alert('Não foi possível adicionar, verifique sua conexão!');
					window.location.href = 'index.php'
			   </script>";
	}
?>