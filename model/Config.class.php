<?php 

Class Config(){

	//INFORMAÇÕES BÁSICAS DO SITE.
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "comprar.me";
	const SITE_EMAIL_ADM = "rafaellucasdesenvolvedorweb@gmail.com";

	//INFORMAÇÕES DO BANCO DE DADOS.
	const BD_HOST = "localhost",
	      BD_USER = "root",
	      BD_SENHA = "",
	      BD_BANCO = "comprar.me",

	//INFORMAÇÕES PARA O PHP MAILER.
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "rafaellucasdesenvolvedorweb@gmail.com";
	const EMAIL_NOME = "Contato Comprar.me";
	const EMAIL_SENHA = "jokermatarobin2016";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_EMAIL_COPIA = "rafaellucasdesenvolvedorweb@gmail.com";

}

 ?>