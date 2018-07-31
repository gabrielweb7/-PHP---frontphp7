<?php 

	require_once("../init.php"); 

	$texto = "Casa carro amor vida teste garoto";

	echo tools::limitaCaracteres($texto, 12, true);

	/* Saida: Casa carro a... */

	echo "<br />";

	echo tools::limitaCaracteres($texto, 12, false);

	/* Saida: Casa carro... */

?>