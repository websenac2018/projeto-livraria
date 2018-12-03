<?php
require_once 'service.php';
	if (isset($_POST['btn-enviar'])){
			if (serviceRegistro($_POST['login'], $_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['cpf'], $_POST['data_nascimento'], $_POST['genero'], $_POST['senha'])){
				echo "funcionou";
			} else {
				echo "nao funcionou";
			}
		}