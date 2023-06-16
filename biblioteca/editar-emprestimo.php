<h1>Editar Empréstimo</h1>
<?php
	$sql = "SELECT * FROM emprestimo 
			WHERE id_emprestimo=".$_REQUEST['id_emprestimo'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();

?>
<form action="?page=salvar-emprestimo" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_emprestimo" value="<?php print $row->id_emprestimo; ?>">
	<div class="mb-3">
		<label>livro emprestimo</label>
		<input type="text" value="<?php print $row->num_emprestimo; ?>" name="livro_id_livro" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>