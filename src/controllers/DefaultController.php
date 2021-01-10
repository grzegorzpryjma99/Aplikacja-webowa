<?php

require_once 'AppController.php';

class DefaultController extends AppController{

    public function index(){
        //TODO display login.html
        $this->render('login');
    }

    public function home(){
<<<<<<< Updated upstream
        //TODO display home.html
=======

>>>>>>> Stashed changes
        $this->render('home');

    }

}