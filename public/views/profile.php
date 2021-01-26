<!DOCTYPE html>
<head>

    <link rel="stylesheet" type= "text/css" href="public/css/profile.css">
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">

    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="./public/js/sidemenu.js" defer></script>

    <title>PROFILE</title>
</head>
<body>
    <div class="base-container">
        <nav class="site-nav" >
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
                    Twój profil
                </div>
                <div class="logo">
                    <a href="home"><img src="public/img/logov3.svg"></a>
                </div>

                <div class="phone">
                    <img src="public/img/logophone.svg">
                </div>
            </header>

            <section class = "profile-container">

                <?php $recipes = $profile[0] ?>
                <?php $user = $profile[1] ?>

                <div class=profiluzytkownika>
                    <div class="foto">
                        <img class="zdjecie" src="public/uploads/<?= $user->getImage(); ?>">
                        <div class="where" >
                            <h class= "nazwauzytkownika"><?= $user->getName(); ?></h>
                            <h class= "nazwauzytkownika"><br><?= $user->getCountry(); ?></h>
                            <h class= "nazwauzytkownika">, <?= $user->getTown(); ?></h>
                        </div>
                    </div>
                        <article class="content">
                            <p> <?= $user->getDescription(); ?> </p>
                        </article>

                    <div class=przyciski>
                        <ul class="lista">
                            <li>
                                <i style="color:#43A3B4;" class="fas fa-search"></i>
                                <a href="#" class="butt">Ustawienia</a>
                            </li>
                            <li>
                                <i style="color:#43A3B4;" class="fas fa-user-friends"></i>
                                <a href="#" class="butt">Prywatność</a>
                            </li>
                            <li>
                                <i style="color:#43A3B4;" class="fas fa-cog"></i>
                                <a href="logout" class="butt">Wyloguj</a>
                            </li>
                            <li>
                                <i style="color:#43A3B4;" class="fas fa-cog"></i>
                                <a href="#" class="butt">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <form class="przepisyuzytkownika" action="recipe" method="POST" ENCTYPE="multipart/form-data">
                    <?php foreach($recipes as $recipe): ?>
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
            </section>
        </main>
    </div>
</body>
