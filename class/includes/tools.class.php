<?php
	/**
	*	Biblioteca com utilidades diversas para o PHP
	*	@author Gabriel Azuaga Barbosa
	* 	@version 1.0.9
	*/
	class tools {


		/** 
		*	Retornar Data e Hora formato BR 
		*/
		public static function getDataHoraBr() {
			return date("d/m/Y h:i:s");
		}
		
		/** 
		*	Retornar Data formato BR 
		*/
		public static function getDataBr() {
			return date("d/m/Y");
		}

		/** 
		*	Retornar Data e Hora formato MYSQL 
		*/
		public static function getDataHoraMysql() {
			return date("Y-m-d h:i:s");
		}
		
		/** 
		*	Retornar Data formato MYSQL 
		*/
		public static function getDataMysql() {
			return date("Y-m-d");
		}

		/** 
		*	Retornar Hora Atual completa 
		*/
		public static function getFullHora() {
			return date("h:i:s");
		}

		/** 
		*	Retornar Hora Atual 
		*/
		public static function getHora() {
			return date("h:i");
		}

		/**
		*	Função criada para setar codificação da página
		*/
		public static function setContentType($tipo) {
			if($tipo == "utf8") { 
				header ('Content-type: text/html; charset=UTF-8');
			} else if($tipo == "iso") { 
				header ('Content-type: text/html; charset=ISO-8859-1');
			}
		}

		/**
		*	Função criada para setar timeZone do Sistema
		*/
		public static function setTimeZone($data = false) {
			if($data) { 
				date_default_timezone_set($data);
			} 
		}

		/**
		*	Função criada para validar E-mail
		*/
		public static function checkEmailValido($email) { 
			if(empty($email)) { return false; }
			return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? false : true;
		}
		
		/**
		*	Função criada para limitar caracteres de um texto e adicionar 3 pontos
		*/
		public static function limitaCaracteres($texto, $limite, $quebra = true){
			$tamanho = strlen($texto);
			if($tamanho <= $limite){
				$novo_texto = $texto;
			}else{ 
				if($quebra == true){
					$novo_texto = trim(substr($texto, 0, $limite))."...";
				}else{ 
					$ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); 
					$novo_texto = trim(substr($texto, 0, $ultimo_espaco))."..."; 
				}
			}
			return $novo_texto; 
		}

	}
?>