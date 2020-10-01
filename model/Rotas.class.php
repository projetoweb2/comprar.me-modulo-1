<?php 

Class Rotas{
    
    //Método estático pode ser acessado sem chamar a classe
	static function get_Pagina(){
		//Verifica se a URL chamou o arquivo.
		if(isset($_GET['pag'])){
			//Concatena ele com .php
			$pagina = $_GET['pag'] . 'php';
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