<!DOCTYPE html>
<head>

    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/find.css">

    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="./public/js/slider2.js" defer></script>
    <script type="text/javascript" src="./public/js/sidemenu.js" defer></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>







    <title>FIND</title>
</head>

<body>
<div class="base-container">
    <nav class="site-nav">
        <div class="cofnij">
            <button class="cofnij">cofnij</button>
        </div>
        <aside class="side-menu">

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
        </aside>
    </nav>
    <main class="main">





        <header>
            <div class="hamburger1">
                <button class="hamburger"></button>
            </div>
            <div class="tekst">
                Powiedz czego szukasz...
            </div>
            <div class="logo">
                <a href="home"><img src="public/img/logov3.svg"></a>
            </div>
            
            <div class="phone">
                <img src="public/img/logophone.svg">
            </div>

        </header>
        <section>

            <form class="find" action="find" method="POST">

                <div class="kcal">
                    <div class="kcalicon">
                        <label for="kacl">Kcal</label>
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="containerrr">
                        <div class="sliderrr">
                            <input id="start" name="kcalstart" value=1000 type = "range" min="0" max="5000" oninput="rangevalue.value=value+'kcal'+' - '+end.value+'kcal'"/>
                            <input id="end" name="kcalend" value=4000 type = "range" min="0" max="5000" oninput="rangevalue.value=start.value+'kcal'+' - '+value+'kcal'"/>
                            <output id="rangevalue">1000kcal - 4000kcal</output>
                        </div>
                    </div>
                </div>

                <div class="carbs">
                    <div class="kcalicon">
                        <label for="carbs">Węglowodany</label>
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="containerrr">
                        <div class="sliderrr">
                            <input id="start2" name="carbsstart" value=200 type = "range" min="0" max="1000" oninput="rangevalue2.value=value+'g'+' - '+end2.value+'g'"/>
                            <input id="end2" name="carbsend" value=800 type = "range" min="0" max="1000" oninput="rangevalue2.value=start2.value+'g'+' - '+value+'g'"/>

                            <output id="rangevalue2">200g - 800g</output>
                        </div>
                    </div>
                </div>

                <div class="fat">
                    <div class="kcalicon">
                        <label for="fat">Tłuszcz</label>
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="containerrr">
                        <div class="sliderrr">
                            <input id="start3" name="fatstart" value=100 type = "range" min="0" max="500" oninput="rangevalue3.value=value+'g'+' - '+end3.value+'g'"/>
                            <input id="end3" name="fatend" value=400 type = "range" min="0" max="500" oninput="rangevalue3.value=start3.value+'g'+' - '+value+'g'"/>
                            <output id="rangevalue3">100g - 400g</output>
                        </div>
                    </div>
                </div>


                <div class="protein">
                    <div class="kcalicon">
                        <label for="protein">Białko</label>
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="containerrr">
                        <div class="sliderrr">
                            <input id="start4" name="proteinstart" value=100 type = "range" min="0" max="500" oninput="rangevalue4.value=value+'g'+' - '+end4.value+'g'"/>
                            <input id="end4" name="proteinend" value=400 type = "range" min="0" max="500" oninput="rangevalue4.value=start4.value+'g'+' - '+value+'g'"/>
                            <output id="rangevalue4">100g - 400g</output>
                        </div>
                    </div>
                </div>


                <div class="category">
                    <h>Kategoria</h><br>
                    <select class="sel" name="wybor[]">
                        <?php foreach($find[0] as $recipe): ?>
                            <option value="<?= $recipe['categories']?>"><?= $recipe['categories']?> </option>
                        <?php endforeach; ?>

                    </select>
                </div>


                <button type="submit">Szukaj</button>
            </form>
        </section>
    </main>
</div>



</body>
