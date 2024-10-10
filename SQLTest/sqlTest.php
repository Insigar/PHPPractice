<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="sqlTest_style.css">
</head>

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

// Create database in xampp\mysql\data\
$sql = "CREATE DATABASE IF NOT EXISTS $databaseName";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully<br>";
    $conn->query("USE $databaseName");
} else {
    echo "Error creating database: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS accountTable(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
account VARCHAR(30) NOT NULL,
password varchar(30) NOT NULL,
email VARCHAR(50)
)";

if ($conn->query($sql) !== TRUE) {
    echo "Error creating database: " . $conn->error;
}

// Check if "TEST"-Account exists. If not, insert into table
$account = "TEST";
$sql = "SELECT account FROM accountTable WHERE account='$account'";
$result = $conn->query($sql)->fetch_assoc();
if (sizeof($result) == 0) {
    $conn->query("INSERT INTO accountTable (account, password) VALUES ('$account', 'test')");
}
// $conn->close();
?>

<body>
    <!-- <h2>HEADER</h2> -->
    <div class="loginBox">
        <form action="sqlTest.php" class="formGrid" method="POST">
            <label style="grid-column-start: span 2;">Login</label>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required>

            <label for="password">Passwort</label>
            <input type="password" id="password" name="password" placeholder="Passwort" required>

            <input type="submit" value="Absenden">
        </form>
    </div>
    <?php
    if (isset($_POST["name"], $_POST["password"])) {
        echo "Login attempt<br>";
        $account = $_POST["name"];
        $password = $_POST["password"];
        echo $_POST["name"], " ", $_POST["password"];
        $sql = "SELECT account, password FROM accountTable WHERE account='$account' AND password='$password'";
        $result = $conn->query($sql)->fetch_assoc();
        // var_dump($result);
        echo "<br>Submitted<br>";
        if ($result !== null) {
            if ($result["account"] == $account and $result["password"] == $password) {
                echo "Login successful";
            } else {
                echo "Login Failed";
            }
        }
    }

    // if (isset($_GET["button"])) {
    //     if ($_GET["button"]) {
    //         // Create connection and USE database
    //         $conn = mysqli_connect($servername, $username, $password);
    //         $conn->query("USE $databaseName");

    //         // Select account and password in database
    //         $sql = "SELECT account, password FROM accountTable WHERE account='$account' AND password='$password'";
    //         $result = $conn->query($sql)->fetch_assoc();
    //         var_dump($result);

    //         // Check if result exists and if it matches the entered data
    //         if ($result !== null) {
    //             if ($result["account"] == $account and $result["password"] == $password) {
    //                 echo "Login successful";
    //                 header("Location: registration.php");
    //                 exit;
    //             } else {
    //                 echo "Login failed";
    //                 header("Location: sqlTest.php");
    //                 exit;
    //             }
    //         }
    //     }
    // }
    ?>

    <div style="border: solid black; height: 800px; width: 400px; position: absolute; top: 50%; left: 50%; transform: translate(-50%); justify-content: center;" class="formGrid">
        <img style="object-fit: contain;" src="..\Untitled.png" alt="Das ist ein Foto" width="">
    </div>
</body>

</html>