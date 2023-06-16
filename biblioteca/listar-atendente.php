<h1>Listar Atendente</h1>
<?php
	$sql = "SELECT * FROM Atendente";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrei <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>id atendente</th>";
		print "<th>Nome </th>";
		print "<th>CPF</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_atendente."</td>";
			print "<td>".$row->nome_atendente."</td>";
			print "<td>".$row->cpf_atendente."</td>";
			print "<td>
						<button onclick=\"location.href='?page=editar-atendente&id_atendente=".$row->id_atendente."';\" class='btn btn-primary'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-atendente&acao=excluir&id_atendente=".$row->id_atendente."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não há resultados</p>";
	}
