<?php

require_once 'AppController.php';

class ProfileController extends AppController{

    public function profile(){

        $this->render('profile');
    }
}