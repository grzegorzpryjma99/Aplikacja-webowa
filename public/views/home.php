<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/home.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>HOMEE</title>
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
                    Znajdź coś dla siebie...
                </div>
                <div class="logo">
                    <img src="public/img/logov3.svg">
                </div>
            </header>

        
                 
            <section class="home">
               
                <div id = "project 1">
                    <img src="public/uploads/<?= $recipe->getImage() ?>">
                    <div>
                        <div class="social">
                            <i class="fas fa-heart">600</i>
                        </div>   
                    </div>
                </div><div id = "project 1">
                    <img src="public/img/uploads/dddddd.png">
                    <div>
                        <div class="social">
                            <i class="fas fa-heart">600</i>
                        </div>   
                    </div>
                </div><div id = "project 1">
                    <img src="public/img/uploads/dddddd.png">
                    <div>
                        <div class="social">
                            <i class="fas fa-heart">600</i>
                        </div>   
                    </div>
                </div><div id = "project 1">
                    <img src="public/img/uploads/dddddd.png">
                    <div>
                        <div class="social">
                            <i class="fas fa-heart">600</i>
                        </div>   
                    </div>
                </div><div id = "project 1">
                    <img src="public/img/uploads/dddddd.png">
                    <div>
                        <div class="social">
                            <i class="fas fa-heart">600</i>
                        </div>   
                    </div>
                </div><div id = "project 1">
                    <img src="public/img/uploads/dddddd.png">
                    <div>
                        <div class="social">
                            <i class="fas fa-heart">600</i>
                        </div>   
                    </div>
                </div><div id = "project 1">
                    <img src="public/img/uploads/dddddd.png">
                    <div>
                        <div class="social">
                            <i class="fas fa-heart">600</i>
                        </div>   
                    </div>
                
            </section>
            
        </main>
    </div>

</body>
