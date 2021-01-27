<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/recipe.css">
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">

    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="./public/js/sidemenu.js" defer></script>
    <script type="text/javascript" src="./public/js/like.js" defer></script>

    <title>Recipe</title>
</head>

<body>
<div class="base-container">
    <nav class="site-nav">
        <a href="home"><img src="public/img/logov2.svg"></a>
        <u1>
            <li>
                <i class="fas fa-plus-circle"></i>
                <a href="add" class="button">Dodaj przepis</a>
            </li>
            <li>
                <i class="fas fa-search"></i>
                <a href="find" class="button">Znajdź przepis</a>
            </li>
            <li>
                <i class="fas fa-user-friends"></i>
                <a href="profile" class="button">Twój profil</a>
            </li>
            <li>
                <i class="fas fa-cog"></i>
                <a href="logout" class="button">Wyloguj</a>
            </li>
        </u1>
    </nav>

    <main class="main">
        <header>
            <div class="hamburger1">
                <button class="hamburger"></button>
            </div>
            <div class="tekst">
                Zainspiruj się...
            </div>
            <div class="logo">
                <a href="home"><img src="public/img/logov3.svg"></a>
            </div>
            <div class="phone">
                <img src="public/img/logophone.svg">
            </div>

        </header>

        <section class="recipe" id="<?= $recipe->getId();?>">
            <div class="left">
                <div class="photo">
                    <div class="napis">
                        <h><?= $recipe->getTitle();?></h>
                    </div>

                    <img class="obrazek" src="public/uploads/<?= $recipe->getImage(); ?>">
                    <div class="heart">
                        <i id= "cal" class="fas fa-heart"><?= $recipe->getLike(); ?></i>
                    </div>
                </div>

                <div class="makro">
                    <div class="kcal">
                        <h>Kalorie: <?= $recipe->getKcal();?> kcal</h>
                    </div>
                    <div class="protein">
                        <h>Białko: <?= $recipe->getProtein();?> g</h>
                    </div>
                    <div class="fat">
                        <h>Tłuszcz: <?= $recipe->getFat();?> g</h>
                    </div>
                    <div class="carbs">
                        <h>Węglowodany: <?= $recipe->getCarbs();?> g</h>
                    </div>
                </div>

                <div class="products">
                    <div class="napis">
                        <h>Produkty użyte w przepisie:</h>
                    </div>
                    <h><br><?= $recipe->getProducts();?></h>
                </div>
            </div>

            <div class="right">
                <div class="description">
                    <div class="napis">
                        <h>Przepis</h>
                    </div>
                    <h><br><?= $recipe->getDescription();?></h>
                </div>

                <div class="steps">

                    <div class="napis">
                        <h>Kroki</h>
                    </div>

                    <div class="step">
                        <?php
                        $array  = $recipe->getSteps();;
                        $steps = explode("*", $array);
                        ?>

                        <?php foreach($steps as $step): ?>
                            <ul>
                                <li><?= $step;?></li>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
</body>







