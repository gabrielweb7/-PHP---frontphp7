<?php
	
	/**
	*
	*	Framework PHP desenvolvido para utilizar no Front End. 
	*	
	*	Desenvolvido por Gabriel Azuaga Barbosa
	*	gabrielbarbosaweb7@gmail.com
	*	Whats: +55 67 98466-0441
	*
	*	@author Gabriel Azuaga Barbosa
	* 	@version 1.0.2
	*	@criado 26/06/2018
	*
	*/

	/* Inicializando definições */
	require_once("define.inc.php");  

	/* Connect */
	getConnect("pdo.class.php");
	
	/* Includes */
	getInclude("areaRestrita.class.php");
	getInclude("tools.class.php");
	getInclude("upload.class.php");
	getInclude("youtube.class.php");

	/* Modulos Personalizados */
	/* getModulo("nomedomodulo.php"); */
	
	/* Variaveis do Projeto */
	define("WEBSITE_TITLE", "Website Titulo");
    define("WEBSITE_DESCRICAO", "Website Descrição");
    define("WEBSITE_AUTHOR", "Gabriel Azuaga Barbosa");



	
	
	
?>