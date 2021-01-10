<?php

require_once 'src/controllers/DefaultController.php';
<<<<<<< Updated upstream
=======
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/AddController.php';
require_once 'src/controllers/ProfileController.php';
require_once 'src/controllers/FindController.php';
>>>>>>> Stashed changes

class Routing{
    public static $routes;//tablica przechowuje url i sciezke do kontrollera

<<<<<<< Updated upstream
    public static function get($url, $controller){
        self::$routes[$url] = $controller;
    }

    public static function run($url){
=======
    public static function get($url, $view){//wstawianie 
        self::$routes[$url] = $view;
    }

    public static function post($url, $view){
        self::$routes[$url] = $view;
    }

    public static function run ($url) {//uruchomienie danego konntrolera przypisanego pod dany url
>>>>>>> Stashed changes
        $action = explode("/", $url)[0];

        if(!array_key_exists($action, self::$routes)){
            die("Wrong url");
        }

        $controller = self::$routes[$action]; //to zwroci nazwe kontrollera z pliku index.php
        $object = new $controller;

        $object->$action();


    }

}

