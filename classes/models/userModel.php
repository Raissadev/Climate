<?php

    namespace models;

    class userModel{

        public static function register($name, $password, $city, $state){
            $insert = \MySql::connect()->prepare("INSERT INTO `users` VALUES (null,?,?,?,?)");
            $insert->execute(array($name,$password,$city,$state));
            if($insert->rowCount() == 1){
                $_SESSION['login'] = true;
                $_SESSION['name'] = $name;
                $_SESSION['password'] = $password;
                $_SESSION['city'] = $city;
                $_SESSION['state'] = $state;
                header('Location: '.BASE.'');
            }
        }

        public static function login($name, $password){
            $toCheck = \MySql::connect()->prepare("SELECT * FROM `users` WHERE name = ? AND password = ?");
            $toCheck->execute(array($name,$password));
            if($toCheck->rowCount() == 1){
                $info = $toCheck->fetch();
                $_SESSION['login'] = true;
                $_SESSION['id'] = $info['id'];
                $_SESSION['name'] = $info['name'];
                $_SESSION['password'] = $info['password'];
                $_SESSION['city'] = $info['city'];
                $_SESSION['state'] = $info['state'];
                header('Location: '.BASE.'');
            }else{
                echo '<script> alert("Nome ou senha incorretos"); </script>';
            }
        }

        public static function logout(){
            unset($_SESSION['login']);
            unset($_SESSION['name']);
            unset($_SESSION['id']);
            unset($_SESSION['password']);
            unset($_SESSION['city']);
            unset($_SESSION['state']);
            session_destroy();
            header('Location: '.BASE.'');
        }

    }

?>