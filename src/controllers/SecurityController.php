<?php
//logowanie i to do rejestracja
require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';


class SecurityController extends AppController {


    public function login()
    {
        //fikcyjny uzytkownik do czasu zrobienia bazy
        $user = new User('jsnow@pk.edu.pl', 'admin', 'Johnny', 'Snow');

        //sprawdzam czy to POST z formularza a mam to z widoku (method="POST")
        if (!$this->isPost()) {
            return $this->render('login');
        }
        //te nazwy zmiennych biorą sie z formularza login.php ZOBACZ
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/home");

    }
}