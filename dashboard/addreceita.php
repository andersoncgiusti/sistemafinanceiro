<?php
	SESSION_START();
	if($_POST['cxsa'] != ""){
		include_once 'conexao.php';

		$id        = $_SESSION["id"];
	    $salario   = $_POST["cxsa"];
        $poupanca  = $_POST["cxpoup"];
	    $sql    = "INSERT INTO tbreceita (id, salario, poupanca) 
		values ('$id', '$salario ', '$poupanca ')";

		$query = mysqli_query($conn, $sql);

		echo  "<script>
					alert('Receita adicionada com sucesso!');
					window.location.href = 'index.php'
			   </script>";

	}else{
		echo "<script>
					alert('Gasto já adicionado, altere na página geral!');
					window.location.href = 'index.php'
			   </script>";
	}
?>