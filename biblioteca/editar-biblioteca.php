<h1>Editar Biblioteca</h1>
<?php
	$sql = "SELECT * FROM biblioteca 
			WHERE id_biblioteca=".$_REQUEST['id_biblioteca'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();

?>
<form action="?page=salvar-biblioteca" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_biblioteca" value="<?php print $row->id_biblioteca; ?>">
	<div class="mb-3">
		<label>Nome da Biblioteca</label>
		<input type="text" value="<?php print $row->nome_biblioteca; ?>" name="nome_biblioteca" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<textarea name="end_biblioteca" class="form-control"><?php print $row->end_biblioteca; ?></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>