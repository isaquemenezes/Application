<?php
    date_default_timezone_set('America/Sao_Paulo');

    if (version_compare(PHP_VERSION, '7.0.0') == -1){
        die('A versão mínima para rodar esta aplicação é: 7.0.0');
    }

    //Lib Loader
    require_once 'Lib/Livro/ClassLoader.php';
    $al = new Livro\Core\ClassLoader;
    $al->addNamespace('Livro', 'Lib/Livro');
    $al->register();