<?php
	
	/**
	*
	*	Framework PHP desenvolvido para utilizar no Front End. 
	*	
	*	Desenvolvido por Gabriel Azuaga Barbosa
	*	gabrielbarbosaweb7@gmail.com
	*	Whats: +55 67 98466-0441
	*
	*	Version: 1.0.1
	*	Data Criação: 26/06/2018
	*
	*/

	/* Iniciando sessão */
	if(empty(session_id())) { session_start(); } 

	/* Var arquivo de configurações e definições */
	$defineFile = __DIR__."\define.php";

	/* Inicializando definições */
	if(file_exists($defineFile)) { require_once($defineFile); } 
	else { die("[FrontPHP7][Error]: Arquivo '{$defineFile}' não existe no diretorio."); }
	
	/* Iniciando class de conexão com banco de dados */
	require_once "connect/pdo.class.php";
	
	/* Includes */
	require_once "includes/tools.inc.php";
	require_once "includes/youtube.inc.php";


	
?>