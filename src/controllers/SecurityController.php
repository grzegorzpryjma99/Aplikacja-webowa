<?php
//logowanie i to do rejestracja
require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {


    public function login()
    {
        $userRepository = new UserRepository();


        //sprawdzam czy to POST z formularza a mam to z widoku (method="POST")
        if (!$this->isPost()) {
            return $this->render('login');
        }
        //te nazwy zmiennych biorą sie z formularza login.php ZOBACZ
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $userRepository->getUser($email);

        if(!$user){
            return $this->render('login', ['messages' => ['User not found!']]);
        }

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