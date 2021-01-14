<?php

require 'Routing.php';

//rozpoczynam secsje bo wszystko przechodzi przez index.php
session_start();

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', "DefaultController");
Routing::get('home', "AddController");
Routing::get('register', "SecurityController");


Routing::get('add', "AddController");
Routing::get('find', "FindController");
Routing::get('profile', "ProfileController");

Routing::post('login', "SecurityController");
Routing::post('logout', "SecurityController");
Routing::post('add', "AddController");

Routing::run($path);
