<?php	
	//create
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$data_nascimento = $_POST['data_nascimento'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$pagamento = $_POST['pagamento'];
	
	try{
		require('conexao/conexao.php');	
		
		$inserir = $pdo->prepare("INSERT INTO cliente VALUES(null,'$nome','$sobrenome','$email','$data_nascimento','$endereco','$pagamento')");		
		$inserir->execute();				 				 		
		
		echo ("<script>
				window.alert('Dados enviados com sucesso');
				window.location.href='clientes.php';			
			   </script>"
			 );							
		
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}
?>