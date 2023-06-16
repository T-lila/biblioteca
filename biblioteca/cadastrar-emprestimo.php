<h1>Cadastrar Empréstimo</h1>
<form action="?page=salvar-emprestimo" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>usuario</label>
		<input type="text" name="usuario_id_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>livro</label>
		<textarea name="livro_id_livro" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<div class="mb-3">
		<label>atendente</label>
		<textarea name="atendente_id_atendente" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<div class="mb-3">
		<label>data</label>
		<textarea name="data_emprestimo" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<div class="mb-3">
		<label>devolução</label>
		<textarea name="devolucacao_emprestimo" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>