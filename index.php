<?php

//Chegando no arquivo autoload, ele faz o carregamento e a instância de todas as classes.
require './lib/autoload.php';

$smarty = new Template();
Rotas::get_pagina();

//VALORES PARA O TEMPLATE
$smarty->assign('NOME', 'RAFAEL ALVES LUCAS');
//Toda vez que eu usar o GET_TEMA dentro de algum tpl, ele irá dar referência a pasta get_SiteTEMA
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());



//A partir da index.php ele irá fazer um display chamando a index.tpl
$smarty->display('index.tpl'); // Esta sempre deve estar por último.

?>