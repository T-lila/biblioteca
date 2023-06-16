<?php
	switch (@$_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO Usuario (
						nome_usuario, 
						cpf_usuario
					) VALUES (
						'".$_POST['nome_usuario']."', 
						'".$_POST['cpf_usuario']."'
					)";
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE Usuario SET
						nome_usuario='".$_POST['nome_usuario']."',
						cpf_usuario='".$_POST['cpf_usuario']."'
					WHERE
						nome_usuario=".$_POST['nome_usuario'];
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM Usuario WHERE nome_usuario=".$_REQUEST['nome_usuario'];
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
			break;
	}

