<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/find.css">
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="./public/js/slider2.js" defer></script>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>



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
        <section class="find">

            <form class="find" action="find" method="POST">

                <div class="kcal">
                    <div class="kcalicon">
                        <label for="kacl">Kcal</label>
                        <i class="fas fa-heart"></i>
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
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="containerrr">
                        <div class="sliderrr">
                            <input id="start2" name="carbsstart" value=200 type = "range" min="0" max="1000" oninput="rangevalue2.value=value+' - '+end2.value"/>
                            <input id="end2" name="carbsend" value=800 type = "range" min="0" max="1000" oninput="rangevalue2.value=start2.value+' - '+value"/>
                            <output id="rangevalue2">200 - 800</output>
                        </div>
                    </div>
                </div>

                <div class="fat">
                    <div class="kcalicon">
                        <label for="fat">Tłuszcz</label>
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="containerrr">
                        <div class="sliderrr">
                            <input id="start3" name="fatstart" value=100 type = "range" min="0" max="500" oninput="rangevalue3.value=value+' - '+end3.value"/>
                            <input id="end3" name="fatend" value=400 type = "range" min="0" max="500" oninput="rangevalue3.value=start3.value+' - '+value"/>
                            <output id="rangevalue3">100 - 400</output>
                        </div>
                    </div>
                </div>


                <div class="protein">
                    <div class="kcalicon">
                        <label for="protein">Białko</label>
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="containerrr">
                        <div class="sliderrr">
                            <input id="start4" name="proteinstart" value=100 type = "range" min="0" max="500" oninput="rangevalue4.value=value+' - '+end4.value"/>
                            <input id="end4" name="proteinend" value=400 type = "range" min="0" max="500" oninput="rangevalue4.value=start4.value+' - '+value"/>
                            <output id="rangevalue4">100 - 400</output>
                        </div>
                    </div>
                </div>

                <div id="list1" class="dropdown-check-list" tabindex="100">
                    <span class="anchor">Wybierz kategorię</span>
                    <ul class="items">
                        <li><input name="American" type="checkbox" />American</li>
                        <li><input name="italian" type="checkbox" />Italian</li>
                        <li><input name="Mexican" type="checkbox" />WMexican</li>
                        <li><input name="Japanese" type="checkbox" />Japanese</li>
                        <li><input name="Chinese" type="checkbox" />Chinese</li>
                    </ul>
                </div>



                    <script>var checkList = document.getElementById('list1');
                        checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
                            if (checkList.classList.contains('visible'))
                                checkList.classList.remove('visible');
                            else
                                checkList.classList.add('visible');
                        }</script>
<!--
                </div>


                    <div class="category">
                    <h>Kategoria</h>

                    <button class="button1" type="1">1</button>
                    <button class="button2" type="2">2</button>
                    <button class="button3" type="3">3</button>
                    <button class="button4" type="4">4</button>
                    <button class="button5" type="5">5</button>

                    <p class="category1" >AMERICAN</p>
                    <p class="category2" >ITALIAN</p>
                    <p class="category3">MEXICAN</p>
                    <p class="category4">JAPANEE</p>
                    <p class="category5">CHINESE</p>
                </div>
                -->
                <button type="submit">Szukaj</button>
            </form>
        </section>
    </main>
</div>



</body>
