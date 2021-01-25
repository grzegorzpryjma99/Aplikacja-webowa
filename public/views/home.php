<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/home.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/przekierowanie.js" defer></script>
    <script type="text/javascript" src="./public/js/sidemenu.js" defer></script>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>

    <title>HOMEE</title>
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
                    Znajdź coś dla siebie...
                </div>
                <div class="logo">
                    <a href="home"><img src="public/img/logov3.svg"></a>
                </div>
                <div class="phone">
                    <img src="public/img/logophone.svg">
                </div>
            </header>



            <form class="home" action="recipe" method="POST" ENCTYPE="multipart/form-data">
                <?php foreach($home as $recipe): ?>

                    <div class="project2" id = "<?= $recipe->getId(); ?>">
                        <button class= "baton" name="activeRecipe" value="<?= $recipe->getId(); ?>" >
                            <img class="img" src="public/uploads/<?= $recipe->getImage(); ?>">
                            <div class="przep">
                                <div class="social">
                                    <i id= "cal" class="fas fa-fire"> <?= $recipe->getKcal(); ?> kcal</i>
                                </div>
                            </div>
                        </button>
                    </div>

                <?php endforeach; ?>
            </form>
            
        </main>
    </div>
</body>
