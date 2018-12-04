<?php
require_once 'service.php';
	if (isset($_POST['btn-enviar'])){
			if ($user = serviceLogin($_POST['txtNome'], $_POST['txtSobrenome'], $_POST['txtEmail'], $_POST['txtCPF'], $_POST['txtDataNasc'], $_POST['txtGenero'], $_POST['senha'])){
				$_SESSION['user'] = $user;
			} else {
				
			}
		}