<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/add.css">
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>ADD</title>
</head>

<body>
<div class="base-container">
    <nav class="site-nav">
        <img src="public/img/logov2.svg">
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
                <a href="#" class="button">Wyloguj</a>
            </li>
        </u1>
    </nav>
    <main class="main">
        <header>
            <div class="hamburger1">
                <button class="hamburger"></button>
            </div>
            <div class="tekst">
                Dodaj przepis...
            </div>
            <div class="logo">
                <img src="public/img/logov3.svg">
            </div>

        </header>

        <section class="add">
            <form action="add" method="POST" ENCTYPE="multipart/form-data"> <!--mam akcje wiec daje wpis do index.php-->
                <?php if(isset($messages)){
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>

                <div class="name">
                    <input type="text" value="Nazwa" name="name" />
                </div>

                <div class="photo">
                    <input type="file" name="photo" />
                </div>

                <h class = "napis">Opis</h>
                <div class="description">
                    <textarea name="description" rows="5" placeholder="Opis"></textarea>

                </div>

                <h class = "napis1">Jakie makro ma twój posiłek? (100g)</h>

                <div class= "makro">
                        <div class="protein">
                            <input type="text" value="Białko" name="protein" />
                        </div>

                        <div class="fat">
                            <input type="text" value="Tłuszcz" name="fat" />
                        </div>

                        <div class="carbs">
                            <input type="text" value="Węglowodany" name="carbs" />
                        </div>
                </div>

                <div class="products">
                    <input type="text" value="Wymień produkty" name="products" />
                </div>
            
                <div class="steps">
                    <div class = "circle">
                        <!--<button type="submit">+</button></div>-->
                        <div class="steps1" action="">
                            <div class="kroki">
                                <input type="text" value="Przygotownie: krok1" name="step1" />
                            </div>
                        </div>
                    </div>
                </form>

                <div class="dodaj">
                    <button type="submit">Dodaj</button>
                </div>
            </form>

        </section>
    </main>
</div>

</body>
