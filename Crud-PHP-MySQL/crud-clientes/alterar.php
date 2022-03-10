	
<?php 

	include_once 'conexao/conexao.php';
	// Header
	include_once'includes/header.php';
					
	$consulta = $pdo->query("SELECT * FROM cliente;");
					
	while ($result = $consulta->fetch(PDO::FETCH_ASSOC)) {													
	
		echo "<tr>";
			echo "<td>{$result['nome']}</td>";
			echo "<td>{$result['sobrenome']}</td>";
			echo "<td>{$result['idade']}</td>";
			echo "<td>{$result['email']}</td>";
			echo "<td>{$result['endereco']}</td>";					
			echo "<td>{$result['pagamento']}</td>	";										
		echo "</tr>";
		$pdo = null;	
	}
?>
	
<div class ="row">
	<div class="col s12 m6 push-m3">
		<h3 class ="light"> Editar Cliente </h3>
		<form action = "update.php" method="GET">
			<input type="hidden" name ="idCliente" value ="<?php $result['idCliente'] ?>">
			<div class ="input-field col s12">
				<input type="text" name="nome" id ="nome" value ="<?php echo$result['nome'];?>">
				<label for="nome">Nome</label>
			</div>
			
			<div class ="input-field col s12">
				<input type="text" name="sobrenome" id ="sobrenome" value ="{$result['sobrenome']">
				<label for="sobrenome">Sobrenome</label>
			</div>
			
			<div class ="input-field col s12">
				<input type="text" name="idade" id ="idade" value ="{$result['idade']}">
				<label for="idade">Idade</label>
			</div>
			<div class ="input-field col s12">
				<input type="email" name="email" id ="email" value ="{$result['email']}">
				<label for="email">E-mail</label>
			</div>
			<div class ="input-field col s12">
				<input type="text" name="endereco" id ="endereco" value ="{$result['endereco']}">
				<label for="endereco">Endereço</label>
			</div>
			<div class ="input-field col s12">
				<input type="text" name="pagamento" id ="pagamento" value ="{$result['pagamento']}">
				<label for="pagamento">Forma de Pagamento </label>
			</div>
			
			<button type ="submit" name="btn-atualizar" class = "btn"> Atualizar </button>
			<a href="clientes.php" class = "btn pink "> Lista de Clientes  </a>
		</form>
	</div>
</div>




<?php 
	// Header
	include_once'includes/footer.php';
?>