<!DOCTYPE html>

<?php

session_start();
?>

<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logologin">
            <a href="home"><img src="public/img/logo.svg"></a>
        </div>
        <div class="login-container">
            <!--action- co ma byc otwarte po wyslanieu formularza , method - jaka metoda wysylam dane
            submit na buttonie zeby wyslac -->
            <form class="login" action="login" method="POST"> <!--bede pobieral dane z tego formularza (14;40 podstawowy szkielet autoryzacji)-->
                <div class="messages">
                    <?php if(isset($messages)){
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <!-- tutaj patrz na name= i to sa te nazwy zmiennych-->
                <input name="email" type="text" placeholder="email@gmail.com">
                <input name="password" type="password" placeholder="password">
                <button type="submit">login</button>
                <a class="buttonregister" href="register">register</a>
            </form>
        </div>
    </div>
</body>
