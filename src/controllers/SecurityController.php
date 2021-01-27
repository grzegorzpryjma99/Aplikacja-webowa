<?php
//logowanie i to do rejestracja
require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRETORY = '/../public/uploads/';
    private $messages = [];

    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        $userRepository = new UserRepository();


        //sprawdzam czy to POST z formularza a mam to z widoku (method="POST")
        if (!$this->isPost()) {
            return $this->render('login');
        }
        //te nazwy zmiennych biorą sie z formularza login.php ZOBACZ
        $email = $_POST['email'];
        $password = md5($_POST['password']);

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
        //ustawiam sesje w zmiennej globalnej na id usera ktory sie zalogowal, pewnie prymitywnie TODO
        $_SESSION['user'] = $userRepository->getId($email);
        //var_dump($_SESSION);

        if(!isset($_SESSION['user']) || $_SESSION['user'] !== true){
            header("Location: {$url}/login");
        }

        header("Location: {$url}/home");
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        if($this->isPost()){

        if(is_uploaded_file($_FILES['photo']['tmp_name']) && $this->validate($_FILES['photo'])){
        move_uploaded_file(
            $_FILES['photo']['tmp_name'],
            dirname(__DIR__).self::UPLOAD_DIRETORY.$_FILES['photo']['name']
        );

            if ($_POST['password'] !== $_POST['confirmedPassword']) {
                return $this->render('register', ['messages' => ['Please provide proper password']]);
            }

            $user = new User($_POST['email'], md5($_POST['password']), $_POST['name'], $_POST['surname'],$_POST['town'],$_POST['country'],$_POST['description'],$_FILES['photo']['name']);


            $this->userRepository->addUser($user);


            return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);

        }else{
            $user = new User($_POST['email'], md5($_POST['password']), $_POST['name'], $_POST['surname'],$_POST['town'],$_POST['country'],$_POST['description']);
            $this->userRepository->addUser($user);
            return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
        }

        }
        }


    public function logout(){

        session_start();
        $_SESSION = array();
        session_destroy();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
        exit;
/*
        session_start();
        if(!isSet($_SESSION['user']))
        {
            $komunikat = "Nie byłeś zalogowany!!!";
        }else{
            unset($_SESSION['user']);
            $komunikat = "Wylogowanie prawidłowe!";
        }
        session_destroy();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
*/
    }

    private function validate(array $photo):bool
    {
        if($photo['size'] > self::MAX_FILE_SIZE){
            $this->messages[] = "File is too large";
            return false;
        }

        if(!isset($photo['type']) && !in_array($photo['type'],self::SUPPORTED_TYPES)){
            $this->messages[] = "File type is not supported";
            return false;
        }

        return true;
    }

}