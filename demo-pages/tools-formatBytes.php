<?php 

	require_once("../init.php"); 

	echo tools::formatBytes(11024);

	/* Retorno: 11 KB */

	echo "<br />";

	echo tools::formatBytes(9211024,1);

	/* Retorno: 8.8 MB */

?>