<?php 
require_once 'conexao.php';
function registrarUsuario($login, $nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha){
	$conexao = getConnection();
	$sql = "INSERT INTO usuarios VALUES (NULL, '$nome', '$sobrenome', '$email', '$cpf', '$datanascimento', 1, md5('$senha'), 1 , '$genero')";
	$resultado = mysqli_query($conexao, $sql);
	echo $sql;
	return true;
}
function logarUsuario($login, $nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha){
	$conexao = getConnection();
	$sql = "SELECT * FROM usuarios where ";
	$resultado = mysqli_query($conexao, $sql);
	return mysqli_fetch_assoc($resultado);
}