<?php

//Chegando no arquivo autoload, ele faz o carregamento e a instância de todas as classes.
require './lib/autoload.php';

$smarty = new Smarty();
//setTemplateDir irá solicitar o doretório para saber onde está o template.
$smarty->setTemplateDir('view/');

//Sempre que fizer a chamada da index.tpl, irá colocar os arquivos de compilação aqui.
$smarty->setCompileDir('view/compile/');

//Irá guardar arquivos nesse cache quando necessário
$smarty->setCacheDir('view/cache/');


//VALORES PARA O TEMPLATE
$smarty->assign('NOME', 'RAFAEL ALVES LUCAS');

//A partir da index.php ele irá fazer um display chamando a index.tpl
$smarty->display('index.tpl'); // Esta sempre deve estar por último.

?>