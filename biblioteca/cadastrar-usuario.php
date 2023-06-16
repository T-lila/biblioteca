s<h1>Cadastrar Usuário</h1>
<form action="?page=salvar-usuario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do usuario </label>
		<input type="text" name="nome_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>cpf</label>
		<textarea name="cpf_usuario" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>