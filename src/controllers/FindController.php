<?php

require_once 'AppController.php';

class FindController extends AppController{

    public function find(){
        $recipeRepository = new RecipeRepository();

        $categories = $recipeRepository->getCategories();


        //sprawdzam czy to POST z formularza a mam to z widoku (method="POST")
        if (!$this->isPost()) {
            return $this->render('find',['find'=> [$categories]]);
        }

        if($_POST['wybor'] == null){
            var_dump('wszystko bo nic nie wybral ');
        }

       $kcalstart = $_POST['kcalstart'];
       $kcalend = $_POST['kcalend'];
       $carbsstart = $_POST['carbsstart'];
       $carbsend = $_POST['carbsend'];
       $fatstart = $_POST['fatstart'];
       $fatend = $_POST['fatend'];
       $proteinstart = $_POST['proteinstart'];
       $proteinend = $_POST['proteinend'];
        $category = $_POST['wybor'];

        //$user = $userRepository->getUser($email);
        $recipe = $recipeRepository->getTheRecipes($kcalstart,$kcalend,$carbsstart,$carbsend,$fatstart,$fatend,$proteinstart,$proteinend, $category);

        return $this->render("home", [
            'home'=> $recipe,
            'message'=>$this->messages,'recipe'=>$recipe]);
    }

}