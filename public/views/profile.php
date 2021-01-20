<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/profile.css">

    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
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
                    <img src="public/img/logophodne.svg"><!--celowy blad bo jakies zle to logo-->
                </div>
            </header>

            <section class = "profile-container">

                <?php $recipes = $profile[0] ?>
                <?php $user = $profile[1] ?>

                <div class=profiluzytkownika>
                    <div class="foto">
                        <img class="zdjecie" src="public/img/uploads/unnamed.jpg">
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
                        <ul>
                            <li>
                                <i class="fas fa-search"></i>
                                <a href="#" class="button">Ustawienia</a>
                            </li>
                            <li>
                                <i class="fas fa-user-friends"></i>
                                <a href="#" class="button">Prywatność</a>
                            </li>
                            <li>
                                <i class="fas fa-cog"></i>
                                <a href="#" class="button">Wyloguj</a>
                            </li>
                            <li>
                                <i class="fas fa-cog"></i>
                                <a href="#" class="button">Help</a>
                            </li>
                        </ul>
                    </div>

                </div>



                <div class="przepisyuzytkownika">
                    <?php foreach($recipes as $recipe): ?>
                        <div class="przepisy">
                            <img src="public/uploads/<?= $recipe->getImage(); ?>">
                            <div>
                                <div class="social">
                                    <i class="fas fa-heart"><?= $recipe->getKcal(); ?></i>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </section>
        </main>
    </div>

</body>
