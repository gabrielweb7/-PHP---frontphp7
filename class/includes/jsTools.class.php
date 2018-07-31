<?php 
	/**
	*	Classe desenvolvida para manipular e escrever funções javascript com PHP
	*	@author Gabriel Azuaga Barbosa
	* 	@version 1.0.3
	*/
	class jsTools {

		/**
		*	Função criada para criar alert em javascript utilizando php 
		*/
		static function alert($text) {
			if(isset($text)) { 
				self::echoScript("alert('".$text."');");
			}
		}

		/** 
		*	Escreve console.log em javascript utilizando php 
		*/
		static function consoleLog($text = false, $css = false) {
			if($text) {
				if(!$css) {
					self::echoScript("console.log('".$text."')");
				} else {
					self::echoScript("console.log('".$text."','".$css."')");
				}
			}
		}

		/**
		*	Função criada para redirecionar de uma página para outra
		*/
		public static function redirecionar($url = false) {
			if($url) {  
				self::echoScript("document.location.href=\"{$url}\";");
			}
		}

		/**
		*	Escreve dentro de tags <script> ... </script> 
		*/
		public static function echoScript($valor = false) {
			if($valor) {
			  echo "<script>".$valor."</script>";
			}
		}
	
	}

?>