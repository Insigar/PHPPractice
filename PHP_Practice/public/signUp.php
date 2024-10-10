<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/loginSignUp.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#ToS").click(function(event) {
                event.preventDefault();
                window.open($(this).attr("href"), "tosWindow", "height=800, width=600, location=no, menubar=no, resizable=yes, scrollbars=yes, status=no, titlebar=no, toolbar=no");
            })
        });
    </script>
</head>

<body>
    <div class="loginBox">
        <form action="./login.php" class="loginForm" method="post">
            <!-- <form class="loginForm" method="post"> -->
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required></input>

            <label for="password">Passwort</label>
            <input type="password" id="password" name="password" required>
            <label for="passwordConfirm">Passwort wiederholen</label>
            <input type="password" id="passwordConfirm" name="passwordConfirm" required>

            <label for="email">E-Mail</label>
            <input type="email" id="email" name="email">
            <label for="email">E-Mail wiederholen</label>
            <input type="email" id="emailConfirm" name="emailConfirm">

            <div style="grid-column-start: span 2;">
                <label for="tosAgree">Agree to the <a class="tosLink" href="https://en.wikipedia.org/wiki/Terms_of_service" id="ToS">ToS</a></label>
                <input type="checkbox" id="tosAgree" name="tosAgree" required>
            </div>

            <!-- <input type="submit" class="button login" value="Einloggen" style="margin-top: 20px;"> -->
            <input type="submit" class="button signUp" value="Absenden">
            <input type="button" class="button back" value="Zurück">
        </form>
    </div>
</body>

</html>