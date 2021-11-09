<?php

    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    $autoload = function($class){
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','database');
    define('BASE','http://localhost/');
    define('BASE_TIMES','http://localhost/times/');

    if(!isset($_SESSION['login'])){
        $_SESSION['name'] = 'Visitante';
        $_SESSION['password'] = '';
        $_SESSION['city'] = 'São Paulo';
        $_SESSION['state'] = 'SP';
    }

?>
