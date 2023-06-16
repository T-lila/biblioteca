<h1>Cadastrar Livro</h1>
<form action="?page=salvar-livro" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do livro</label>
		<input type="text" name="nome_livro" class="form-control">
	</div>
	<div class="mb-3">
		<label>categoria</label>
		<textarea name="id_categoria" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<label>Titulo</label>
		<textarea name="titulo_livro" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<div class="mb-3">
		<label>Autor</label>
		<textarea name="autor_livro" class="form-control"></textarea>
	</div>
	<div class="mb-3"><div class="mb-3">
		<label>Editora</label>
		<textarea name="editora_livro" class="form-control"></textarea>
	</div>
	<div class="mb-3"><div class="mb-3">
		<label>Edição</label>
		<textarea name="edicacao_livro" class="form-control"></textarea>
	</div>
	</div>
	<div class="mb-3"><div class="mb-3">
		<label>Localiadade</label>
		<textarea name="localidade_livro" class="form-control"></textarea>
	</div>
	</div>
	<div class="mb-3"><div class="mb-3">
		<label>Ano</label>
		<textarea name="ano_livro" class="form-control"></textarea>
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>