<?php
	switch (@$_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO atendente (
						id_atendente,
						nome_atendente,
						cpf_atendente
					) VALUES (
					'".$_POST['id_atendente']."',						 
						'".$_POST['nome_atendente']."',
						'".$_POST['cpf_atendente']."'
					)";
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-atendente';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-atendente';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE Atendente SET
						id_atendente='".$_POST['id_atendente']."',
						nome_atendente='".$_POST['nome_atendente']."',
						cpf_atendente='".$_POST['cpf_atendente']."'
					WHERE
						id_atendente=".$_POST['id_atendente'];
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=listar-atendente';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-atendente';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM atendente WHERE id_atendente=".$_REQUEST['id_atendente'];
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=listar-atendente';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-atendente';</script>";
			}
			break;
	}

