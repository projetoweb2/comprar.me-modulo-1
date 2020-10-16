<?php 

Class Rotas{

	public static $pag;
	private static $pasta_controller = 'controller';
	private static $pasta_view = 'view';

	static function get_SiteHOME(){
		return Config::SITE_URL . '/' .Config::SITE_PASTA;
	}

	static function get_SiteRAIZ(){
		return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
	}

	static function get_SiteTEMA(){
		return self::get_SiteHOME(). '/' .self::$pasta_view;
	}

	static function pag_Carrinho(){
		return self::get_SiteHOME(). '/carrinho';
	}
    
    //Método estático pode ser acessado sem chamar a classe
	static function get_Pagina(){
		//Verifica se a URL chamou o arquivo.
		if(isset($_GET['pag'])){

			$pagina = $_GET['pag'];

			self::$pag = explode('/', $pagina);

			//echo '<pre>';
			//var_dump(self::$pag);
			//echo 'pre';

			$pagina = 'controller/' .self::$pag[0] . '.php';

			//Concatena ele com .php
			//$pagina = 'controller/' .$_GET['pag'] . '.php';
			//echo $pagina;
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