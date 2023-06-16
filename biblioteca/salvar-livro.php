<?php
	switch (@$_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO Livro (
						nome_livro, 
						id_categoria,
						titulo_livro,
						autor_livro,
						editora_livro,
						edicacao_livro,
						localidade_livro,
						ano_livro
					) VALUES (
						'".$_POST['nome_livro']."', 
						'".$_POST['id_categoria']."',
						'".$_POST['titulo_livro']."',
						'".$_POST['autor_livro']."',
						'".$_POST['edicacao_livro']."',
						'".$_POST['localidade_livro']."',
						'".$_POST['ano_livro']."'
					)";
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE livro SET
						nome_livro='".$_POST['nome_livro']."',
						ano_livro='".$_POST['ano_livro']."'
					WHERE
						id_livro=".$_POST['id_livro'];
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM livro WHERE id_livro=".$_REQUEST['id_livro'];
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}
			break;
	}

