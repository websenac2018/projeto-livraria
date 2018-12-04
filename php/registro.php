<?php
require_once 'service.php';
	if (isset($_POST['btn-enviar'])){
			if ($user = serviceRegistro($_POST['txtNome'], $_POST['txtSobrenome'], $_POST['txtEmail'], 
				$_POST['txtCPF'], $_POST['txtDataNasc'], $_POST['txtGenero'], $_POST['isenha'], 
				$_POST['txtCEP'], $_POST['txtEndCobr'], $_POST['txtNum'], $_POST['txtComplemento'], 
				$_POST['txtBairro'], $_POST['txtCidade'], $_POST['txtEstado'])){

				echo 'funcionou';
			} else {
				echo "nao funcionou";
			}
		}