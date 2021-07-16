<?php
	SESSION_START();
	if($_POST['cxestabelecimento'] != ""){
		include_once 'conexao.php';

		$id     = $_SESSION["id"];
	    $estabelecimento = $_POST["cxestabelecimento"];
        $data            = $_POST["cxdata"];
        $valor           = $_POST["cxvalor"];
        $forma           = $_POST["cxforma"];
	    $sql    = "INSERT INTO tbextrato (id, estabelecimento, data, valor, forma) 
		values ('$id', '$estabelecimento', '$data', '$valor ', '$forma')";

		$query = mysqli_query($conn, $sql);

		echo  "<script>
					alert('Adicionado');
					window.location.href = 'index.php'
			   </script>";

	}else{
		echo "<script>
					alert('Não foi possível adicionar, verifique sua conexão!');
					window.location.href = 'index.php'
			   </script>";
	}
?>