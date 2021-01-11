<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/find.css">
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>FIND</title>
</head>

<body>
<div class="base-container">
    <nav class="site-nav">
        <div class="cofnij">
            <button class="cofnij">cofnij</button>
        </div>
        <aside class="side-menu">

            <img src="public/img/logov2.svg">
            <ul>
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
            </ul>
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
                <img src="public/img/logov3.svg">
            </div>
            
            <div class="phone">
                <img src="public/img/logovphone.svg">
            </div>

        </header>
        <section class="find">
            
            <div class="kcal">
                <div class="kcalicon">
                    <label for="kacl">Kcal</label>
                    <i class="fas fa-heart"></i>
                </div>  
                <input type="range" id="kacl" name="kcal"
                       min="0" max="10000"> 
            </div>

            <div class="carbs">
                <div class="kcalicon">
                    <label for="carbs">Węglowodany</label>
                    <i class="fas fa-heart"></i>
                </div>  
                <input type="range" id="carbs" name="carbs"
                       min="0" max="500">
            </div>

            <div class="fat">
                <div class="kcalicon">
                    <label for="fat">Tłuszcz</label>
                    <i class="fas fa-heart"></i>
                </div>  
                <input type="range" id="fat" name="fat"
                       min="0" max="500">
            </div>

              
            <div class="protein">
                <div class="kcalicon">
                    <label for="protein">Białko</label>
                    <i class="fas fa-heart"></i>
                </div>
                <input type="range" id="protein" name="protein"
                       min="0" max="500">
            </div>

            <div class="products">
                <select>
                    <option>Opcja 1</option>
                    <option>Opcja 2</option>
                    <option>Opcja 3</option>
                </select>
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
            <!--to mam zakomentowane narazie
            <script>
                var slider= document.getElementById("kcal")
                var selector = document.getElementById("selector")

                slider.oninput = function (){
                    selector..style.left = this.value + "%";
                }
            </script>
            -->
            <button type="submit">Szukaj</button>

        </section>
    </main>
</div>



</body>
