<?php

require_once 'AppController.php';

class FindController extends AppController{

    public function find(){
        $recipeRepository = new RecipeRepository();

        //sprawdzam czy to POST z formularza a mam to z widoku (method="POST")
        if (!$this->isPost()) {
            return $this->render('find');
        }

       $kcalstart = $_POST['kcalstart'];
       $kcalend = $_POST['kcalend'];
       $carbsstart = $_POST['carbsstart'];
       $carbsend = $_POST['carbsend'];
       $fatstart = $_POST['fatstart'];
       $fatend = $_POST['fatend'];
       $proteinstart = $_POST['proteinstart'];
       $proteinend = $_POST['proteinend'];


        //$user = $userRepository->getUser($email);
        $recipe = $recipeRepository->getTheRecipes($kcalstart,$kcalend,$carbsstart,$carbsend,$fatstart,$fatend,$proteinstart,$proteinend);

        return $this->render("home", [
            'home'=> $recipe,
            'message'=>$this->messages,'recipe'=>$recipe]);
    }

}