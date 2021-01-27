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
            $recipe['photo'],
            $recipe['protein'],
            $recipe['fat'],
            $recipe['carbs'],
            $recipe['products'],
            $recipe['steps'],
            $recipe['kcal'],
            $recipe['categories'],
            $recipe['like'],
            $recipe['id']);
    }



    public function addRecipe(Recipe $recipe)
    {

        $conn= $this->database->connect();
        $stmt = $conn->prepare('
            INSERT INTO likes (id_usera, id_recipe)
            VALUES (?,?)
        ');

        $id_usera = "*";
        $stmt->execute([
            $id_usera,
            $recipe ->getId()
        ]);

        $cos = (int)$conn->lastInsertId();

        $stmt = $conn->prepare('
        INSERT INTO public.recipes (title,description,id_user,photo,protein,fat,carbs,products,steps,kcal,categories,id_like)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?)
        ');

        //TODO narazie pobralem to jak pobralem, zmienic inicjowanie sesji jakos
        $id_user = $_SESSION['user'];
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
          $cos
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
                $recipe['photo'],
                $recipe['protein'],
                $recipe['fat'],
                $recipe['carbs'],
                $recipe['products'],
                $recipe['steps'],
                $recipe['kcal'],
                $recipe['categories'],
                $recipe['like'],
                $recipe['id']);
        }
        
        return $result;
    }

    public function getUserRecipes(int $tmp): array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM public.recipes WHERE id_user = :tmp'
        );

        $stmt->bindParam(':tmp', $tmp, PDO::PARAM_INT);
        $stmt->execute();
        $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($recipes as $recipe) {
            $result[] = new Recipe(
                $recipe['title'],
                $recipe['description'],
                $recipe['photo'],
                $recipe['protein'],
                $recipe['fat'],
                $recipe['carbs'],
                $recipe['products'],
                $recipe['steps'],
                $recipe['kcal'],
                $recipe['categories'],
                $recipe['like'],
                $recipe['id']);
        }

        return $result;
    }

    public function getTheRecipes(int $kcalstart, int $kcalend, int $carbsstart, int $carbsend, int $fatstart, $fatend, $proteinstart, $proteinend, $category): array
    {
        $result = [];
        //var_dump($category[0]);

        //$ciag = implode('\',\'',$category);
        //var_dump($ciag);
       // $ciag = '\''.$ciag.'\'';
        //var_dump($ciag);

        $stmt = $this->database->connect()->prepare('
        SELECT * FROM recipes WHERE kcal > :kcalstart AND kcal < :kcalend AND carbs > :carbsstart AND carbs < :carbsend
        AND fat > :fatstart AND fat < :fatend AND protein > :proteinstart AND protein < :proteinend AND categories IN (:a,:b,:d,:e,:f);
        ');
        $stmt->bindParam(':kcalstart', $kcalstart, PDO::PARAM_INT);
        $stmt->bindParam(':kcalend', $kcalend, PDO::PARAM_INT);
        $stmt->bindParam(':carbsstart', $carbsstart, PDO::PARAM_INT);
        $stmt->bindParam(':carbsend', $carbsend, PDO::PARAM_INT);
        $stmt->bindParam(':fatstart', $fatstart, PDO::PARAM_INT);
        $stmt->bindParam(':fatend', $fatend, PDO::PARAM_INT);
        $stmt->bindParam(':proteinstart', $proteinstart, PDO::PARAM_INT);
        $stmt->bindParam(':proteinend', $proteinend, PDO::PARAM_INT);


            $stmt->bindParam(':a', $category[0], PDO::PARAM_STR);
            $stmt->bindParam(':b', $category[1], PDO::PARAM_STR);
            $stmt->bindParam(':d', $category[2], PDO::PARAM_STR);
            $stmt->bindParam(':e', $category[3], PDO::PARAM_STR);
            $stmt->bindParam(':f', $category[4], PDO::PARAM_STR);





        $stmt->execute();
        $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);



        foreach ($recipes as $recipe) {
            $result[] = new Recipe(
                $recipe['title'],
                $recipe['description'],
                $recipe['photo'],
                $recipe['protein'],
                $recipe['fat'],
                $recipe['carbs'],
                $recipe['products'],
                $recipe['steps'],
                $recipe['kcal'],
                $recipe['categories'],
                $recipe['like'],
                $recipe['id']);
        }

        return $result;
    }

    public function getProdukty(): array
    {
        var_dump('jestem');
        $stmt = $this->database->connect()->prepare('
        SELECT products FROM public.recipes
        ');
        $stmt->execute();
        $products = $stmt->fetch(PDO::FETCH_ASSOC);
;

        return $products;
    }

    public function like(int $id, int $who){
        $stmt = $this->database->connect()->prepare('
        UPDATE recipes SET "like" = "like" + 1 WHERE id = :id
        ');
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
    }

    public function getLikesId(int $id){
        $stmt = $this->database->connect()->prepare('
        SELECT ud.id FROM recipes u LEFT JOIN likes ud
                                         ON u.id_like = ud.id WHERE u.id = :id;
        ');

        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $tmp = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($tmp['id']);
        return $tmp['id'];
    }


    public function updateLikeTable(string $who, int $id){
        $a = (string)$who;
        $stmt = $this->database->connect()->prepare('
        UPDATE likes SET id_usera = id_usera||\'*\'||:a WHERE id = :id
        ');
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->bindParam(":a",$a,PDO::PARAM_STR);
        $stmt->execute();
    }

    public function checkLike(int $id, int $id_user){
//wypisac tabele dla id przepisu gdzie sa lajki i wypisac tych userów
        $stmt = $this->database->connect()->prepare('
        SELECT id_usera FROM recipes u LEFT JOIN likes ud
                                ON u.id_like = ud.id WHERE u.id = :id;
        ');

        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        $tmp = $stmt->fetch(PDO::FETCH_ASSOC);
        $usrs = explode("*", $tmp['id_usera']);

        if(in_array($id_user, $usrs)){
            var_dump('jest w tablicy');
            return false;
        }else{
            return true;
        }
    }

    public function getCategories(): array
    {
        $stmt = $this->database->connect()->prepare('
        SELECT DISTINCT categories FROM public.recipes;
        ');
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($products as $product) {
            $result[] = $product;
        }
        return $products;
    }

}