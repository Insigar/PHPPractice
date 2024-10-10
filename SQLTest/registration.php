<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="sqlTest_style.css">
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "testDB";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>

    <div class="loginBox">
        <form class="formGrid" method="POST">
            <label style="grid-column-start: span 2;">Bitte geben Sie hier Ihre Daten an. E-Mail-Addresse wird vorerst nicht benötigt.</label>
            <label for="name">Name</label>
            <input type="text" id="name" required>
            <label for="password">Passwort</label>
            <input type="text" id="password" required>
            <label for="email">E-Mail</label>
            <input type="text" id="email">
            <input type="submit" value="Registrieren" style="grid-column-start: span 2; width:100px; margin-left: 50%; transform: translate(-50%)">
        </form>
    </div>


</body>

</html>