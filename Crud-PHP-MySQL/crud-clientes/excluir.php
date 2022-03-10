<?php

	$id = $_GET['idCliente'];		
	
	try{
		require('conexao/conexao.php');	
		$sql = "DELETE FROM cliente WHERE idCliente = '$id'";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam('$id', $_POST['idCliente'], PDO::PARAM_INT);   
		$stmt->execute();			 				 		
		
		echo ("<script>
			window.alert('Dados EXCLUÍDOS com sucesso');
			window.location.href='clientes.php';			
			</script>"
		);							
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}
?>
