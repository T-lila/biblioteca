<?php
	switch (@$_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO emprestimo (
						usuario_id_usuario,
						livro_id_livro,
						atendente_id_atendente,
						data_emprestimo,
						devolucacao_emprestimo
					) VALUES (
					'".$_POST['usuario_id_usuario']."',						 
						'".$_POST['livro_id_livro']."',
						'".$_POST['atendente_id_atendente']."',
						'".$_POST['data_emprestimo']."',
						'".$_POST['devolucacao_emprestimo']."'
					)";
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE emprestimo SET
						livro_id_livro='".$_POST['livro_id_livro']."'
						
					WHERE
						id_emprestimo=".$_POST['id_emprestimo'];
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM Emprestimo WHERE id_emprestimo=".$_REQUEST['id_emprestimo'];
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-emprestimo';</script>";
			}
			break;
	}

