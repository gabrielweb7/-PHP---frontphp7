<?php
	/**
	*	Biblioteca com utilidades diversas para o PHP
	*	@author Gabriel Azuaga Barbosa
	* 	@version 1.0.0
	*/
	class tools {

		/**
		*	Função criada para setar codificação da página
		*/
		public static setContentType($tipo) {
			if($tipo == "utf8") { 
				header ('Content-type: text/html; charset=UTF-8');
			} else if($tipo == "iso") { 
				header ('Content-type: text/html; charset=ISO-8859-1');
			}
		}

		/**
		*	Função criada para setar timeZone do Sistema
		*/
		public static setTimeZone($data = false) {
			if($data) { 
				date_default_timezone_set($data);
			} 
		}

		public static function checkEmailValido($email) { 
			if(empty($email)) { return false; }
			return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? false : true;
		}
		
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