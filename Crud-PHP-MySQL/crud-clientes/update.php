	<?php 
	include_once 'conexao/conexao.php';
	// Header
	include_once'includes/header.php';
	
	
		$sql = "UPDATE cliente SET nome = :nome, 
            sobrenome = :sobrenome, 
            idade = :idade,  
            email = :email,  
            endereco = :endereco ,
			pagamento =:pagamento,
            WHERE idCliente = :id";
			$stmt = $pdo->prepare($sql);                                  
			$stmt->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);       
			$stmt->bindParam(':sobrenome', $_POST['sobrenome'], PDO::PARAM_STR);    
			$stmt->bindParam(':idade', $_POST['idade'], PDO::PARAM_STR);
			// use PARAM_STR although a number  
			$stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR); 
			$stmt->bindParam(':endereco', $_POST['endereco'], PDO::PARAM_STR);   
			$stmt->bindParam(':pagamento', $_POST['pagamento'], PDO::PARAM_STR); 
			$stmt->bindParam(':id', $_POST['idCliente'], PDO::PARAM_INT);   
			$stmt->execute();
?>
