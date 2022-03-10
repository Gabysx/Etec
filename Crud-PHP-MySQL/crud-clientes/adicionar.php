<?php 
	// Header
	include_once'includes/header.php';
?>

<div class ="row">
	<div class="col s12 m6 push-m3">
		<h3 class ="light"> Novo Cliente </h3>
		<form action = "inserir.php" method="POST">
			<div class ="input-field col s12">
				<input type="text" name="nome" id ="nome">
				<label for="nome">Nome</label>
			</div>
			
			<div class ="input-field col s12">
				<input type="text" name="sobrenome" id ="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>
			
			<div class ="input-field col s12">
				<input type="text" name="idade" id ="idade">
				<label for="idade">Idade</label>
			</div>
			<div class ="input-field col s12">
				<input type="email" name="email" id ="email">
				<label for="email">E-mail</label>
			</div>
			<div class ="input-field col s12">
				<input type="text" name="endereco" id ="endereco">
				<label for="endereco">Endereço</label>
			</div>
			<div class ="input-field col s12">
				<input type="text" name="pagamento" id ="pagamento">
				<label for="pagamento">Forma de Pagamento </label>
			</div>
			
			<button type ="submit" name="btn-cadastrar" class = "btn"> Cadastrar </button>
			<a href="clientes.php" class = "btn pink "> Lista de Clientes  </a>
		</form>
	</div>
</div>




<?php 
	// Header
	include_once'includes/footer.php';
?>