<?php
require_once 'crud-registro.php';
	function serviceLogin($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha){
		if ($user = logarUsuario($login, $nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha)){
			return $user;
		} else {
			return false;
		}
	}

	function serviceRegistro($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha, $cep, $end, $num, $complemento, $bairro, $cidade, $estado){
		if ($user = registrarUsuario($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha, $cep, $end, $num, $complemento, $bairro, $cidade, $estado)){
			return $user;
		} else {
			return false;
		}
	}