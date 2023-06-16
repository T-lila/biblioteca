<h1>Editar Usuário</h1>
<?php
	$sql = "SELECT * FROM Usuario
			WHERE nome_usuario=".$_REQUEST['nome_usuario'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();

?>
<form action="?page=salvar-usuario" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="nome_usuario" value="<?php print $row->nome_usuario; ?>">
	<div class="mb-3">
		<label>Nome do usuário</label>
		<input type="text" value="<?php print $row->nome_usuario; ?>" name="nome_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<textarea name="cpf_usuario" class="form-control"><?php print $row->cpf_usuario; ?></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>