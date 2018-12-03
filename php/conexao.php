<?php

	function getConnection() {
		$link = mysqli_connect("localhost","root","123456","livraria", 3307) or die("Erro ao abrir a conexão");
		mysqli_set_charset($link, "utf8");
		return $link;
	}