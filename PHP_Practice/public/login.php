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
            $(":submit").click(function(event) {
                // sessionStorage.setItem("loggedIn", true)
                // alert(sessionStorage["loggedIn"]);
                // event.preventDefault();
            })

            $(":button").click(function(event) {
                window.open("signUp.php", "_self");
            });
        });
    </script>



</head>

<?php
$login = json_decode(file_get_contents(__DIR__ . "/../login.json"), true);
var_dump($login);
var_dump($_POST);
var_dump($_SESSION);

// Create connection
$conn = mysqli_connect($login["hostname"], $login["username"], $login["password"], $login["database"]);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<body>
    <div class="loginBox">
        <form action="../index.php" class="loginForm" method="post">
            <!-- <form class="loginForm" method="post"> -->
            <label for="name">Name</label>
            <input type="text" id="name" name="name"></input>
            <label for="password">Passwort</label>
            <input type="text" id="password" name="password">
            <input type="submit" class="button login" value="Einloggen" style="margin-top: 20px;">
            <input type="button" class="button signUp" value="Registrieren">
        </form>
    </div>
</body>

<?php
if (isset($_POST["name"], $_POST["password"])) {

    $account = $_POST["name"];
    $password = $_POST["password"];

    $sql = "SELECT account, password FROM accountTable WHERE account='$account' AND password='$password'";
    $result = $conn->query($sql)->fetch_assoc();
    echo "<br>Submitted<br>";
    if ($result !== null) {
        if ($result["account"] == $account and $result["password"] == $password) {
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["loggedIn"] = true;
            echo "Login successful";
        } else {
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["loggedIn"] = false;
            echo "Login Failed";
        }
    }

    // if ($_POST["name"] == "TEST" and $_POST["password"] == "test") {
    //     $_SESSION["name"] = $_POST["name"];
    //     $_SESSION["loggedIn"] = true;
    // } else {
    //     $_SESSION["name"] = $_POST["name"];
    //     $_SESSION["loggedIn"] = false;
    // }
}
?>

</html>