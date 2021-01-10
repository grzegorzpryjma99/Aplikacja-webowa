<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', "DefaultController");
Routing::get('home', "DefaultController");

//post('login', "SecurityController");
Routing::get('add', "AddController");
Routing::get('find', "FindController");
Routing::get('profile', "ProfileController");



Routing::run($path);
