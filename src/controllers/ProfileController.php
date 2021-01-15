<?php

require_once 'AppController.php';

class ProfileController extends AppController{

    private $recipeRepository;
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->recipeRepository = new RecipeRepository();
        $this->userRepository = new UserRepository();
    }

    public function profile(){

        $recipes = $this->recipeRepository->getUserRecipes($_SESSION['user']);
        $email = $this->userRepository->geEmailByID($_SESSION['user']);
        $user = $this->userRepository->getUser($email);
        $this->render('profile',['profile'=> [$recipes,$user]]);

    }
}