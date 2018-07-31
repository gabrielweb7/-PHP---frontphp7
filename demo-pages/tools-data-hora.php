<?php 

	require_once("../init.php"); 

	echo tools::getDataHoraMysql();

	/* Retorno: 2018-07-31 11:07:26 */

	echo "<br />";

	echo tools::getDataMysql();

	/* Retorno: 2018-07-31 */

	echo "<br />";

	echo tools::getFullHora();

	/* Retorno: 11:10:45 */

	echo "<br />";

	echo tools::getHora();

	/* Retorno: 11:10 */

	echo "<br />";

	echo tools::getDataHoraBr();

	/* Retorno: 31/07/2018 11:13:01 */

	echo "<br />";

	echo tools::getDataBr();

	/* Retorno: 31/07/2018 */

	echo "<br />";

?>