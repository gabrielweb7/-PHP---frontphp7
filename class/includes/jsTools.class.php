<?php 
	/**
	*	Classe desenvolvida para manipular e escrever funções javascript com PHP
	*	@author Gabriel Azuaga Barbosa
	* 	@version 1.0.0
	*/
	class jsTools {

		/**
		*	Função criada para redirecionar de uma página para outra
		*/
		public static function jsRedirecionar($url = false) {
			if($url) {  
				echo "<script>document.location.href=\"{$url}\";</script>";
			}
		}
	
	}

?>