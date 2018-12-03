<?php
require_once 'crud.php';
	function serviceLogin($login, $nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha){
		if ($user = logarUsuario($login, $nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha)){
			return $user;
		} else {
			return false;
		}
	}

	function serviceRegistro($login, $nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha){
		if ($user = registrarUsuario($login, $nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha)){
			return $user;
		} else {
			return false;
		}
	}