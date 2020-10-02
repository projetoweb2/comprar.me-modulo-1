<?php 

Class Rotas{

	public static $pag;
    
    //Método estático pode ser acessado sem chamar a classe
	static function get_Pagina(){
		//Verifica se a URL chamou o arquivo.
		if(isset($_GET['pag'])){

			$pagina = $_GET['pag'];

			self::$pag = explode('/', $pagina);

			//Concatena ele com .php
			$pagina = 'controller/' .$_GET['pag'] . '.php';
			echo $pagina;
			//Verifica se o arquivo existe.
			if(file_exists($pagina)){
				include $pagina;
			} else {
			include 'erro.php';
		}

		} 

	}
} 

 ?>