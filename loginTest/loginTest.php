<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="loginTest_style.css">
</head>

<!-- If successful link to homepage else link to loginpage -->

<body>
    <!-- <div class="loginBox">
        <form action="loginCheck.php" class="formGrid" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required>

            <label for="password">Passwort</label>
            <input type="password" id="password" name="password" placeholder="Passwort" required>

            <input type="submit" value="Absenden">
        </form>
    </div> -->

    <?php
    if (isset($_POST["name"], $_POST["password"])) {
        if ($_POST["name"] == "TEST" and $_POST["password"] == "test") {
            header("loginTest.php?login=true");
        } else {
            header("loginTest.php?login=false");
        }
    } else {
        $action = "loginTest.php";
    }
    ?>

    <!-- <div style="border: solid black; height: 800px; width: 400px; position: absolute; top: 50%; left: 50%; transform: translate(-50%); justify-content: center;" class="formGrid">
        <img src="..\Untitled.png" class="imageTest" alt="Das ist ein Foto" width="">
    </div> -->
    <div style="display: grid; grid-template-columns: max-content max-content; grid-gap: 5px">
        <img src="..\Untitled.png" class="imageTest" alt="Das ist ein Foto" width="">

        <p>
            HIER text
            HIER text
            HIER text
            HIER text
            HIER text
            HIER text
        </p>

    </div>
</body>

</html>