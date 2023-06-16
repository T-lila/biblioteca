<h1>Listar Usuário</h1>
<?php
	$sql = "SELECT * FROM Usuário ";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrei <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Nome do usuario</th>";
		print "<th>CPF</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->cpf_usuario."</td>";
			print "<td>
						<button onclick=\"location.href='?page=editar-usuario&nome_usuario=".$row->nome_usuario."';\" class='btn btn-primary'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-usuario&acao=excluir&nome_usuario=".$row->nome_usuario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não há resultados</p>";
	}
