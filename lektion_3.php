<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lektion_3_stylesheet.css">
</head>

<body>


    <div class="singleColumnGrid" id="top-left">
        <div>
            <h1 style="text-align:center; line-height: 5px">Persönliche Daten</h1>
        </div>
        <div class="prettyBox" style="width: auto; height:auto;">
            <form class="formGrid" method="POST">
                <label for="name" style="text-align: center;">Name:</label>
                <input type="text" id="name" name="inputName" placeholder="Name" required>

                <label for="password">Passwort:</label>
                <input type="password" id="password" name="Passwort" placeholder="Passwort" required>

                <label for="textArea">Nachricht:</label>
                <textarea class="messageArea" id="textArea" name="testText" id="text" placeholder="Nachricht"></textarea>

                <button class="submitButton" type="submit">Submit</button>
            </form>
        </div>
    </div>


    <?php
    $set = isset($_POST["inputName"], $_POST["Passwort"], $_POST["Passwort"]);
    $str = "No Input";
    // if ($_POST["inputName"] !== null and $_POST["Passwort"] and $_POST["testText"]) {
    if ($set) {
        $str = $_POST["inputName"] . "\n" . $_POST["Passwort"] . "\n" . $_POST["testText"];
    } else {
        $str = "No Input";
    }
    ?>
    <div class="prettyBox" id="bottom_left">
        <textarea class="messageArea"><?php echo $str ?></textarea>
    </div>

    <!-- <div class="prettyBox" id="top-right">
        <form class="formGrid" style="align-items: center">
            <label for="nachricht">Nachricht</label>
            <textarea class="messageArea" name="" id="nachricht" placeholder="Nachricht"></textarea>
        </form>
    </div> -->
    <!-- <div class="prettyBox" id="center">center</div> -->
    <!-- <div class="prettyBox" id="bottom_right">br</div> -->
</body>