<h1>Listar Livro</h1>
<?php
	$sql = "SELECT * FROM livro";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrei <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do livro</th>";
		print "<th>categoria</th>";
		print "<th>titulo</th>";
		print "<th>autor</th>";
		print "<th>editora</th>";
		print "<th>edicação </th>";
		print "<th>localidade </th>";
		print "<th>ano </th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->nome_livro."</td>";
			print "<td>".$row->id_categoria."</td>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->autor_livro."</td>";
			print "<td>".$row->editora_livro."</td>";
			print "<td>".$row->edicacao_livro."</td>";
			print "<td>".$row->localidade_livro."</td>";
			print "<td>".$row->ano_livro."</td>";
			print "<td>
						<button onclick=\"location.href='?page=editar-livro&id_livro=".$row->id_livro."';\" class='btn btn-primary'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-livro&acao=excluir&id_livro=".$row->id_livro."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não há resultados</p>";
	}
