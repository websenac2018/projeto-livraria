<?php
require_once 'serviceUsuario.php';
	if (isset($_POST['btn-enviar'])){
			if ($user = serviceLogin($_POST['txtEmail'], $_POST['senha'])){
				echo "funcionou";
			} else {
				echo 'não funcionou';
			}
		}