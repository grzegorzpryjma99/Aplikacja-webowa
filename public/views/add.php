<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/add.css">
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/script3.js" defer></script>
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

        <section class="add">
            <form action="add" method="POST" ENCTYPE="multipart/form-data"> <!--mam akcje wiec daje wpis do index.php-->
                <?php if(isset($messages)){
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>

                <div class="name">
                    <input type="text" placeholder="Nazwa" name="name" />
                </div>

                <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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

                <h class = "napis">Opis</h>
                <div class="description">
                    <textarea name="description" rows="5" placeholder="Opis"></textarea>
                </div>

                <h class = "napis1">Jakie makro ma twój posiłek? (100g)</h>

                <div class= "makro">
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

                <div class="kcal">
                    <input type="number" placeholder="kcal" name="kcal" />
                </div>

                <div class="products">
                    <input type="text" placeholder="Wymień produkty" name="products" />
                </div>



                <div class="categories">
                    <input type="text" placeholder="categories" name="categories" />
                </div>


                <input  placeholder="Przygotowanie: podaj kroki" type="text" id="candidate"/>
                <button type="button" onclick="addItem()">Dodaj krok</button>
                <!--<button type="button" onclick="removeItem()">Cofnij</button>-->
                <ul id="dynamic-list"></ul>
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


                <input name="ilosckrokow" value=3 id="candidate" />

                <div class="dodaj">
                    <button type="submit">Dodaj</button>
                </div>

            </form>
</div>







</section>
    </main>
</div>
</div>
</body>
