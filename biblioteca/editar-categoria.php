<h1>Editar Categoria</h1>
<?php
	$sql = "SELECT * FROM categoria
			WHERE id_categoria=".$_REQUEST['id_categoria'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();

?>
<form action="?page=salvar-categoria" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_categoria" value="<?php print $row->
	<div class="mb-3">
		<label>Nome da categoria</label>
		<textarea name="nome_categoria" class="form-control"><?php print $row->nome_categoria; ?></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>