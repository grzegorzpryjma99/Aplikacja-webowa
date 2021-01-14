<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/Recipe.php';

class RecipeRepository extends Repository
{
    public function getRecipe(int $id): ?Recipe
    {
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM public.recipes WHERE id = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $recipe = $stmt->fetch(PDO::FETCH_ASSOC);

        //28:00 filmik z baza danych
        if($recipe == false){
            return null;
        }

        return new Recipe(
            $recipe['title'],
            $recipe['description'],
            $recipe['image'],
            $recipe['protein'],
            $recipe['fat'],
            $recipe['carbs'],
            $recipe['products'],
            $recipe['steps'],
            $recipe['kcal'],
            $recipe['categories']
        );
    }

    public function addRecipe(Recipe $recipe): void
    {
        //$data = new DataTime();
        $stmt = $this->database->connect()->prepare('
        INSERT INTO public.recipes (title,description,id_user,photo,protein,fat,carbs,products,steps,kcal,categories)
        VALUES (?,?,?,?,?,?,?,?,?,?,?)
        ');

        $id_user = 1;

        $stmt->execute([
          $recipe->getTitle(),
          $recipe->getDescription(),
          $id_user,
          $recipe->getImage(),
          $recipe->getProtein(),
          $recipe->getFat(),
          $recipe->getCarbs(),
          $recipe->getProducts(),
          $recipe->getSteps(),
          $recipe->getKcal(),
          $recipe->getCategories(),
        ]);


    }

    public function getRecipes(): array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM recipes'
        );
        $stmt->execute();
        $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($recipes as $recipe) {
            $result[] = new Recipe(
                $recipe['title'],
                $recipe['description'],
                $recipe['image'],
                $recipe['protein'],
                $recipe['fat'],
                $recipe['carbs'],
                $recipe['products'],
                $recipe['steps'],
                $recipe['kcal'],
                $recipe['categories']);
        }
        
        return $result;
    }
}