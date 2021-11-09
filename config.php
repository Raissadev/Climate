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
    define('DATABASE','climate');
    define('BASE','http://192.168.0.107/Projects/myClimate/');
    define('BASE_TIMES','http://192.168.0.107/Projects/myClimate/times/');

    if(!isset($_SESSION['login'])){
        $_SESSION['name'] = 'Visitante';
        $_SESSION['password'] = '';
        $_SESSION['city'] = 'São Paulo';
        $_SESSION['state'] = 'SP';
    }

?>