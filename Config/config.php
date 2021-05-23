<?php
#Caminhos absolutos
$pastaInterna="Applicaion/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRCSS', DIRPAGE.'assets/css/');
define('DIRIMG', DIRPAGE.'assets/images/');
define('DIRJS', DIRPAGE.'assets/js/');
define('DIRTP', DIRPAGE.'assets/templates/');

//DIRM diretório marketplace
define('DIRM', DIRPAGE.'marketplace/');
define('DIRM_CA', DIRPAGE.'marketplace/categorias/');


#Atalhos diretórios negocios
define('DIRN', DIRPAGE.'negocios/');

#Acesso ao db
define('HOST',"localhost");
define('DB',"application_db");
define('USER',"root");
define('PASS',"");



#Outros
define("DOMAIN",$_SERVER["HTTP_HOST"]);