<?php
	SESSION_START();
	if($_POST['cxsalario'] != ""){
		include_once 'conexao.php';

		$nomeusuario     = $_SESSION["nome"];
	    $salario  = $_POST["cxsalario"];
        //$despesas = $_POST["cxdespesas"];
        $poupanca = $_POST["cxpoupanca"];
        //$saldo    = $_POST["cxsaldo"];
	    $sql    = "INSERT INTO tbreceita (nomeusuario, salario, poupanca) 
		values ('$nomeusuario ', '$salario ', '$poupanca ')";

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