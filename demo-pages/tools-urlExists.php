<?php 

	require_once("../init.php"); 

	if(tools::urlExists('http://clientes.gabrieldaluz.com.br')) {
		echo "Url existe!";
	} else {
		echo "Url não existe!";
	}

?>