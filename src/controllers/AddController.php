<?php

require_once 'AppController.php';

class AddController extends AppController{

    public function add(){
        //TODO display home.php
        $this->render('add');
    }
}