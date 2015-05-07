<?php @session_start(); ?>

<?php


define("HOST_PATH", dirname(__FILE__));
define("HOST_PATH1", dirname(__FILE__));
define("CONTEXTO", "/T&C");
define("WEB_APP_PATH", HOST_PATH.CONTEXTO."/app");
define("ADMIN", WEB_APP_PATH. "/admin");
define("ADMIN_PAGINA",ADMIN. "/pagina");
define("ASSETS",WEB_APP_PATH. "/assets");
define("HTTP_HOST_PATH", "http://" . $_SERVER['HTTP_HOST'].CONTEXTO);
define("HTTP_APP_PATH", HTTP_HOST_PATH."/app");
define("HTTP_RESOURCE_ADM_PATH", HTTP_APP_PATH."/resources/administrativo");
define("HTTP_RESOURCE_ADM_ASSETS_PATH", HTTP_RESOURCE_ADM_PATH."/assets");

define("HTTP_RESOURCE_SITE_PATH", HTTP_APP_PATH."/resources/site");
define("HTTP_RESOURCE_SITE_ASSETS_PATH", HTTP_RESOURCE_SITE_PATH."/assets");
define("HOST_PATH_APP_MODAL", HOST_PATH."/modal");

define("HTTP_ORIGINAL", HTTP_APP_PATH.'/resources/site/img/marca/original/');
define("HTTP_SMALL", HTTP_APP_PATH.'/resources/site/img/marca/small/');
define("HTTP_THUMB", HTTP_APP_PATH.'/resources/site/img/marca/thumbnails/');
/**
 * Level de reportacao de erros no PHP
 * Ver levels em: http://www.php.net/manual/en/errorfunc.constants.php
 **/

error_reporting(E_ALL);

define('DB_HOST','localhost');
define('DB_NAME','db_multimarcas');
define('DB_USER','root');
define('DB_PASS','');

function __autoload($classe)
{
	//Todos as classes devem esta em letras minusculas
	$model       = dirname(__FILE__).'/model/'.$classe.'.php';
	$persistence = dirname(__FILE__).'/persistence/'.$classe.'.php';
	$business = dirname(__FILE__).'/business/'.$classe.'.php';
	//echo $model .">>". file_exists($model);
	if(file_exists($model)){
		require $model;
	}else if(file_exists($persistence)){
		require $persistence;
	}else if(file_exists($business)){
		require $business;
	}
	//Inclui arquivo de classe
}
?>


