<?php 
	// Conexão 
	include_once'conexao/conexao.php';
	
	// Header
	include_once'includes/header.php';
?>

<div class ="row">
	<div class="col s12 m6 push-m3">
		<h3 class ="light"> Clientes </h3>
		<table class"striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>Idade:</th>
					<th>Email:</th>
					<th>Endereço:</th>
					<th>Pagamento:</th>	
				</tr>
			</thead>
			
			<tbody>
			<?php
				
					
					$consulta = $pdo->query("SELECT * FROM cliente;");
					
					while ($result = $consulta->fetch(PDO::FETCH_ASSOC)) {													
	
						echo "<tr>";
						
							echo "<td>{$result['nome']}</td>";
							echo "<td>{$result['sobrenome']}</td>";
							echo "<td>{$result['idade']}</td>";
							echo "<td>{$result['email']}</td>";
							echo "<td>{$result['endereco']}</td>";
							echo "<td>{$result['pagamento']}</td>";
							echo "<td><a href='alterar.php ? id={$result['idCliente']}' class ='btn-floating orange'> <i class ='material-icons' > edit </i></a></td>";
							echo "<td><a href='excluir.php ? id={$result['idCliente']}' ' class ='btn-floating red '>  <i class ='material-icons' > delete </i></a></td>";	
						
						
						echo "</tr>";

					$pdo = null;	
			
					}
					?>
			</tbody>
		</table>
		<br>
		<a href='adicionar.php'  class = "btn"> Adicionar Cliente </a>
	</div>
</div>




<?php 
	// Header
	include_once'includes/footer.php';
?>