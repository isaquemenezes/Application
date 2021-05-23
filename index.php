<?php
    // require_once 'lib/livro/core/Classloader.php';

    /*
        php -v
        PHP 7.2.6 (cli) (built: May 23 2018 20:51:04) ( ZTS MSVC15 (Visual C++ 2017) x86)
        Copyright (c) 1997-2018 The PHP Group
        Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    */
    
    
    header("Content-Type: text/html; charset=utf-8"); //Cabeçalho
    date_default_timezone_set("America/Belem");       //Fuso horário Local
    // error_reporting(0);   //Ocultando erros do sistema, do users           

    include ("Config/config.php");               //Arquivo de configuração
    // include (DIRREQ."library/vendor/autoload.php");  //Arquivo de autoload
    // include (DIRREQ."helpers/variables.php");    //variáveis de imput 
    
    $load = require 'library/vendor/autoload.php';
    $load->register();
    
 
    $dispatch = new Classes\ClassDispatch();  //objeto para configuração para localhost(index da views)
    include ($dispatch ->getInclusao());       //dispatch para index da views
    //include ($dispatch ->getInclusaoTemp());       //dispatch para index_temp(page temporária)
     
    






    