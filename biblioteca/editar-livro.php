<h1>Editar Livro</h1>
<?php
	$sql = "SELECT * FROM livro 
			WHERE nome_livro=".$_REQUEST['nome_livro'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();

?>
<form action="?page=salvar-livro" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_livro" value="<?php print $row->id_livro; ?>">
	<div class="mb-3">
		<label>Nome da livro</label>
		<input type="text" value="<?php print $row->nome_livro; ?>" name="nome_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>Categoria</label>
		<textarea name="id_categoria" class="form-control"><?php print $row->id_categoria; ?></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>