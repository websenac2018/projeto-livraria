<?php
require_once 'conexao.php';
function inserirLivro($categoria, $titulo, $autor, $editora, $isbn, $numeroPaginas, $sinopse, $peso, $data, $fornecedor, $preco, $subcategorias, $capa, $quantidade, $imagem){
	$data = date('Y-m-d', strtotime($data));
	$conexao = getConnection();
	$sql = "INSERT INTO produto VALUES (NULL, '$categoria', '$titulo', '$autor', '$editora', '$isbn', '$numeroPaginas', '$sinopse', '$peso', '$data', '$fornecedor', '$preco', '$quantidade', '$imagem', $subcategorias, $capa)";
	$resultado = mysqli_query($conexao, $sql);
	if (mysqli_affected_rows($conexao) >= 1) {
		return true;
	} else {
		return false;
	}
}

function editarLivro($categoria, $titulo, $autor, $editora, $isbn, $numeroPaginas, $sinopse, $peso, $fornecedor, $preco, $subcategorias, $capa, $id, $quantidade, $imagem){
	$conexao = getConnection();
	$sql = "UPDATE produto SET Categoria_id = $categoria, titulo = '$titulo', autor = '$autor', editora = '$editora', isbn = '$isbn', numeroPaginas = '$numeroPaginas', sinopse = '$sinopse', peso = '$peso', fornecedor = '$fornecedor', preco = '$preco', SubCategorias_id = $subcategorias, TipoDeCapa_id = $capa, quantidade = $quantidade, imagem = $imagem WHERE id = $id";
	$resultado = mysqli_query($conexao, $sql);
	if (mysqli_affected_rows($conexao) >= 1) {
		return true;
	} else {
		return false;
	}
}
function excluirLivro($id){
	$conexao = getConnection();
	$sql = "DELETE FROM produto where id = $id";
	$resultado = mysqli_query($conexao, $sql);
	if (mysqli_affected_rows($conexao) >= 1) {
		return true;
	} else {
		return false;
	}
}
	function listarLivro($id){
		$conexao = getConnection();
		# Fazer toda a listagem do livro
		$sql = "SELECT
		prod.titulo,
		prod.autor,
		prod.editora,
		prod.isbn,
		prod.numeropaginas as numero_paginas,
		prod.sinopse,
		prod.peso,
		prod.datapublicacao as data_publicacao,
		prod.fornecedor,
		tcap.tipodecapa as tipo_capa,
		prod.preco,
		prod.quantidade,
		prod.imagem,
		cat.categoria,
		subc.assunto

		from produto prod

		inner join categoria cat on cat.id = prod.categoria_id
		inner join subcategorias subc on subc.id = prod.subcategorias_id
		inner join tipodecapa tcap on tcap.id = prod.tipodecapa_id
		where prod.id = $id;";
		$resultado = mysqli_query($conexao, $sql);
		if (mysqli_affected_rows($conexao) >= 1) {
			return mysqli_fetch_assoc($resultado);
		} else {
			return false;
		}
	}
	}
