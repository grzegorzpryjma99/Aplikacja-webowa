<?php

require 'Routing.php';
//phpinfo();
$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', "DefaultController");
Routing::get('home', "DefaultController");
Routing::post('login', "SecurityController");


Routing::run($path);
