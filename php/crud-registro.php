<?php 
require_once 'conexao.php';
function registrarUsuario($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha, $cep, $end, $num, $complemento, $bairro, $cidade, $estado){
	$conexao = getConnection();
	$sql = "INSERT INTO usuarios VALUES (NULL, '$nome', '$sobrenome', '$email', '$cpf', '$datanascimento', 1, md5('$senha'), 1 , $genero, 1)";
	$resultado = mysqli_query($conexao, $sql);
	$id = mysqli_insert_id($conexao);
	$sql = "INSERT INTO endereco VALUES (NULL, '$cep', '$end', '$num', '$complemento', '$bairro', '$estado', '$cidade', $id, 1)";
	$resultado = mysqli_query($conexao, $sql);
	return true;
}
function logarUsuario($nome, $sobrenome, $email, $cpf, $datanascimento, $genero, $senha){
	$conexao = getConnection();
	$sql = "SELECT nome, email FROM usuarios where email = '$email' and senha = md5('$senha')";
	$resultado = mysqli_query($conexao, $sql);
	return mysqli_fetch_assoc($resultado);
}