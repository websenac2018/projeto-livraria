<?php
require_once 'serviceUsuario.php';
			if (serviceEditar($_POST['categoria'], $_POST['titulo'], $_POST['autor'], $_POST['editora'], 
				$_POST['ISBN'], $_POST['numeropaginas'], $_POST['sinopse'], $_POST['peso'], 
				$_POST['fornecedor'], $_POST['preco'], $_POST['subcategorias'], 
				$_POST['capa'], $_POST['id'])){
			} else {
				
			}