<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>REGISTER</title>
</head>

<body>
<div class="container">
    <div class="logologin">
        <a href="home"><img src="public/img/logo.svg"></a>
    </div>

    <div class="login-container">
        <form class="register" action="register" method="POST" ENCTYPE="multipart/form-data">
            <div class="messages">
                <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                    ?>
            </div>
            <h>Wybierz zdjęcie profilowe, możesz to zrobić później</h>
            <input type="file" name="photo"/>
            <input name="email" type="text" placeholder="email@email.com">
            <input name="password" type="password" placeholder="password">
            <input name="confirmedPassword" type="password" placeholder="confirm password">
            <input name="name" type="text" placeholder="name">
            <input name="surname" type="text" placeholder="surname">
            <input name="town" type="text" placeholder="town">
            <input name="country" type="text" placeholder="country">
            <input name="description" type="text" placeholder="description">
            <button type="submit">REGISTER</button>
        </form>
    </div>

</div>
</body>