<?php
	/**
	*	Arquivo de configurações e definições / variáveis do sistema
	*	@author Gabriel Azuaga Barbosa
	* 	@version 1.1.0
	*/

	/**
	*	Mostrar erros do sistema 
	*/
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	/** 
	*	Limite de uploads 
	*/
	ini_set('upload_max_filesize', '25M');
	ini_set('post_max_size', '25M');
	ini_set('max_input_time', 300);
	ini_set('max_execution_time', 300);

	/**
	*	Sessão está vazia ? 
	*/
	if(empty(session_id())) { 
		/** 
		*	Inicia Sessão
		*/
		session_start(); } 
	else  { 
		/** 
		*	Gerando nova sessão para diminuir probabilidade de sequestro de sessão! 
		*/
		session_regenerate_id(); 
	}

	/** 
	*	Inicia Composer's autoloader 
	*/
	require 'vendor/autoload.php';
	
	/** 
	*	Configuração padrão do TimeZone 
	*/
	date_default_timezone_set('America/Campo_Grande');
	
	/**
	*	Defines: Variaveis do sistema 
	*/
	define("CLASS_DIR","class/");
	define("CLASS_INC_DIR", CLASS_DIR."includes/");
	define("CLASS_CON_DIR", CLASS_DIR."connect/");

	define("SERVER_NAME", $_SERVER["SERVER_NAME"]);
	define("REQUEST_URI", $_SERVER["REQUEST_URI"]);
	define("SCRIPT_NAME", $_SERVER["SCRIPT_NAME"]);

	/** 
	*	Configurações de conexão com o banco de dados 
	*/
	if(SERVER_NAME == "localhost" or SERVER_NAME == "127.0.0.1") {
		define("DATABASE_DB","db");
		define("DATABASE_HOST","localhost");
		define("DATABASE_USER","root");
		define("DATABASE_PASS","");
		/* RAIZ DO SITE */
		define('RAIZ_DIR','http://localhost/@_MEUS_CLIENTES_@/');
	} else {
		define("DATABASE_DB","db");
		define("DATABASE_HOST","localhost");
		define("DATABASE_USER","user");
		define("DATABASE_PASS","pass");
		/* RAIZ DO SITE */
		define('RAIZ_DIR','http://site.com.br/novo/');
	}

	/**
	*	Função estrutura para carregar classe / include 
	*/
	function getInclude($fileDir = false) {
		if($fileDir) { require_once CLASS_INC_DIR.$fileDir; }
	}	

	/**
	*	Função estrutura para carregar classe / connect 
	*/
	function getConnect($fileDir = false) {
		if($fileDir) { require_once CLASS_CON_DIR.$fileDir; }
	}

?>