<?php
require_once 'crud_book.php';
	function serviceInserir($categoria, $titulo, $autor, $editora, $isbn, $numeroPaginas, $sinopse, $peso, $data, $fornecedor, $preco, $subcategorias, $capa, $quantidade, $imagem){
		if ($livro = inserirLivro($categoria, $titulo, $autor, $editora, $isbn, $numeroPaginas, $sinopse, $peso, $data, $fornecedor, $preco, $subcategorias, $capa, $quantidade, $imagem)){
			return $livro;
		} else {
			return false;
		}
	}
	function serviceEditar($categoria, $titulo, $autor, $editora, $isbn, $numeroPaginas, $sinopse, $peso, $fornecedor, $preco, $subcategorias, $capa, $id, $quantidade, $imagem){
		if ($livro = editarLivro($categoria, $titulo, $autor, $editora, $isbn, $numeroPaginas, $sinopse, $peso, $fornecedor, $preco, $subcategorias, $capa, $id, $quantidade, $imagem)){
			return $livro;
		} else {
			return false;
		}

	}
	function serviceExcluir($id){
		if ($livro = excluirLivro($id)){
			return $livro;
		} else {
			return false;
		}
	}
	function serviceListarLivro($categoria, $titulo, $autor, $editora, $isbn, $numeroPaginas, $sinopse, $peso, $data, $fornecedor, $preco, $subcategorias, $capa, $quantidade, $imagem){
		if ($livro = listarLivro($categoria, $titulo, $autor, $editora, $isbn, $numeroPaginas, $sinopse, $peso, $data, $fornecedor, $preco, $subcategorias, $capa, $quantidade, $imagem)) {
			$_SESSION['livro'][$id] = $livro;
		} else {
			return false;
		}
	}
