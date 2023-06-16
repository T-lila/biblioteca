<h1>Cadastrar Categoria</h1>
<form action="?page=salvar-categoria" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>id da categoria</label>
		<input type="text" name="id_categoria" class="form-control">
	</div>
	<div class="mb-3">
		<label>Nome da categoria</label>
		<textarea name="nome_categoria" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>