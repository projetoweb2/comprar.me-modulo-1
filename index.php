<?php

//Chegando no arquivo autoload, ele faz o carregamento e a instância de todas as classes.
require './lib/autoload.php';

$smarty = new Smarty();
//setTemplateDir irá solicitar o doretório para saber onde está o template
$smarty->setTemplateDir('view/');
//A partir da index.php ele irá fazer um display chamando a index.tpl
$smarty->display('index.tpl');

?>