<h1>Editar Atendente</h1>
<?php
	$sql = "SELECT * FROM atendente
			WHERE id_atendente=".$_REQUEST['id_atendente'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();

?>
<form action="?page=salvar-atendente" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_atendente" value="<?php print $row->id_atendente; ?>">
	<div class="mb-3">
		<label>id Atendente</label>
		<input type="text" value="<?php print $row->id_atendente; ?>" name="id_atendente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Nome da Atendente</label>
		<textarea name="nome_atendente" class="form-control"><?php print $row->nome_atendente; ?></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>