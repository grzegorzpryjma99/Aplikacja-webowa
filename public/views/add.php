<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/add.css">
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/script3.js" defer></script>
    <script type="text/javascript" src="./public/js/sidemenu.js" defer></script>
    <title>ADD</title>
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
                Dodaj przepis...
            </div>
            <div class="logo">
                <a href="home"><img src="public/img/logov3.svg"></a>
            </div>
            <div class="phone">
                <img src="public/img/logophone.svg">
            </div>

        </header>


            <form class="add" action="add" method="POST" ENCTYPE="multipart/form-data"> <!--mam akcje wiec daje wpis do index.php-->
                <?php if(isset($messages)){
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>

                <div class="photo">
                    <div class="file-upload">
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Dodaj zdjęcie</button>

                        <div class="image-upload-wrap">
                            <input name="photo" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                                <h3>Upuść plik tutaj</h3>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-image">Usuń <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class= "makro">
                    <div><h class = "napis">Jakie makro ma twój posiłek? (100g)</h></div>
                    <div class="macro">
                        <div class="protein">
                            <input type="number" placeholder="Białko" name="protein" />
                        </div>

                        <div class="fat">
                            <input type="number" placeholder="Tłuszcz" name="fat" />
                        </div>

                        <div class="carbs">
                            <input type="number" placeholder="Węglowodany" name="carbs" />
                        </div>
                    </div>
                </div>


                <div class="name">
                    <h class = "napis">Nazwa twojego przepisu</h>
                    <input type="text" placeholder="Nazwa" name="name" />
                </div>



                <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


                <div class="kcal">
                    <h class = "napis">Jaką kaloryczność ma twój posiłek? (100g)</h>
                    <input type="number" placeholder="kcal" name="kcal" />
                </div>

                <div class="products">
                    <h class = "napis">Wymień produkty które są potrzebne. Do oddzielenia użyj przecinka</h>
                    <input type="text" placeholder="Wymień produkty" name="products" />
                </div>



                <div class="categories">
                    <h class = "napis">Kategoria twojego posiłku</h>
                    <input type="text" placeholder="categories" name="categories" />
                </div>

                <div class="description">
                    <h class = "napis">Opis</h>
                    <textarea name="description" rows="5" placeholder="Opis"></textarea>
                </div>

                <div class="kroki">
                    <input  placeholder="Przygotowanie: podaj kroki" type="text" id="candidate"/>
                    <button type="button" onclick="addItem();calculate()">Dodaj krok</button>
                    <!--<button type="button" onclick="removeItem()">Cofnij</button>-->
                    <ul id="dynamic-list"></ul>
                </div>
<!--
                <div class="panel-heading">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input name="1" type="text" class="form-control datepicker" placeholder="Pick the date">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-primary add_field_button"><i class="fa fa-plus"></i> Add More</button>
                        </div>

                        <div class="input_fields_wrap">-->
                            <!-- Dynamic Fields go here --><!--
                        </div>
                    </div>
-->

                <input name="ilosckrokow" id="ilosckrokow" />

                <div></div>
                <div class="dodaj">
                    <button type="submit">Dodaj</button>
                </div>

            </form>

    </main>
</div>
</body>







