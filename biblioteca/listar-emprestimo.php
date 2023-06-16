<h1>Listar Empréstimo</h1>
<?php
	$sql = "SELECT * FROM emprestimo";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrei <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>usuario</th>";
		print "<th>livro</th>";
		print "<th>atendente</th>";
		print "<th>data</th>";
		print "<th>devolucação</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->usuario_id_usuario."</td>";
			print "<td>".$row->livro_id_livro."</td>";
			print "<td>".$row->atendente_id_atendente."</td>";
			print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->devolucacao_emprestimo."</td>";
			print "<td>
						<button onclick=\"location.href='?page=editar-emprestimo&id_emprestimo=".$row->id_emprestimo."';\" class='btn btn-primary'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-emprestimo&acao=excluir&id_emprestimo=".$row->id_emprestimo."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não há resultados</p>";
	}
