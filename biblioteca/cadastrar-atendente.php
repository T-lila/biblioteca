<h1>Cadastrar Atendente</h1>
<form action="?page=salvar-atendente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>id Atendente </label>
		<input type="text" name="id_atendente" class="form-control">
		</div>
	<div class="mb-3">
	<div class="mb-3">
		<label>Nome da Atendente</label>
		<textarea name="nome_atendente" class="form-control"></textarea>
	</div>
		<label>CPF</label>
		<textarea name="cpf_atendente" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>