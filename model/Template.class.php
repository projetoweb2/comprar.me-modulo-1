<?php 
// Classe responsável por encacminhar o caminho dos templates sempre que ela for chamada.
// Classe template herdada do componente smarty
Class Template extends Smarty {
	function __construct(){
		parent:: __construct();

		//setTemplateDir irá solicitar o doretório para saber onde está o template.
        $this->setTemplateDir('view/');

		//Sempre que fizer a chamada da index.tpl, irá colocar os arquivos de compilação aqui.
		$this->setCompileDir('view/compile/');

		//Irá guardar arquivos nesse cache quando necessário
		$this->setCacheDir('view/cache/');

	}
}

?>