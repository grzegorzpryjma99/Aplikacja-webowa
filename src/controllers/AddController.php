<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Recipe.php';
require_once __DIR__.'/../repository/RecipeRepository.php';

class AddController extends AppController{

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRETORY = '/../public/uploads/';

    private $messages = [];
    private $recipeRepository;


    public function __construct()
    {
        parent::__construct();
        $this->recipeRepository = new RecipeRepository();
    }

    public function home(){

        $recipes = $this->recipeRepository->getRecipes();
        $this->render('home',['home'=> $recipes]);

    }

    public function add(){

        if($_SESSION['user'] == NULL){
            return $this->render('login');
        }

        //cala logika przesylania wiadomosci
        if($this->isPost() && is_uploaded_file($_FILES['photo']['tmp_name']) && $this->validate($_FILES['photo'])){
            move_uploaded_file(
              $_FILES['photo']['tmp_name'],
              dirname(__DIR__).self::UPLOAD_DIRETORY.$_FILES['photo']['name']
            );

            $tab[] = 0;



            for( $x = 1; $x <= (int)($_POST['ilosckrokow']);  $x++ ){
                $tmp = (string)$x;
                $tab[$x-1] = $_POST[$tmp];
                //w tej tablicy mam teraz po kolei kroki
            }



            $recipe = new Recipe($_POST['name'], $_POST['description'],$_FILES['photo']['name'],$_POST['protein'],$_POST['fat'],$_POST['carbs'],$_POST['products'],implode("*",$tab),$_POST['kcal'],$_POST['categories']);
            $this->recipeRepository->addRecipe($recipe);



            return $this->render("home", [
                'home'=> $this->recipeRepository->getRecipes(),
                'message'=>$this->messages,'recipe'=>$recipe]);
        }
        $this ->render("add",['message'=>$this->messages]);
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

    public function recipe(){

        $recipes = $this->recipeRepository->getRecipe($_POST['activeRecipe']);
        $this->render('recipe',['recipe'=> $recipes]);

    }

    public function like(int $id){

        if($this->recipeRepository->checkLike($id,$_SESSION['user'])) {
            $this->recipeRepository->like($id,$_SESSION['user']);
            $tmp = $this->recipeRepository->getLikesId($id);
            $this->recipeRepository->updateLikeTable($_SESSION['user'],$tmp);
            http_response_code(200);
        }
    }
}