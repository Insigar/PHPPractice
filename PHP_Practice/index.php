<?php
session_start();
if (isset($_POST["name"])) {
    if ($_POST["name"] == "TEST") {
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["loggedIn"] = true;
    } else {
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["loggedIn"] = false;
    }
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>
        $(document).ready(function() {
            $(".headerList.nav a").each(function() {
                $(this).click(function(event) {
                    event.preventDefault();
                    $("#main-content").load("public/" + $(this).attr("page") + ".php");
                })
            })
        });

        window.onload = function() {
            $("#main-content").load("public/home.php");
        }

        // function loadContent(page) {
        //     var xmlhttp = new XMLHttpRequest();
        //     xmlhttp.onreadystatechange = function() {
        //         // if readystate == DONE and status == DONE
        //         if (this.readyState == 4 && this.status == 200) {
        //             // gets the element with the id "main-content" (div down below)
        //             document.getElementById("main-content").innerHTML = this.responseText;
        //         }
        //     };
        //     // open specifies the request, send sends it
        //     xmlhttp.open("GET", "./public/" + page + ".php", true);
        //     xmlhttp.send();
        // }

        // function setNavListeners() {
        //     // select <a> elements with parents that have classes headerList AND nav and save in var
        //     var links = document.querySelectorAll(".headerList.nav a");
        //     links.forEach(function(link) {
        //         // add an eventListener that "listens" to clicks and adds a new click event
        //         link.addEventListener("click", function(event) {
        //             event.preventDefault(); // in this case prevents default event of a link (loading the page)
        //             var page = this.getAttribute("page"); // gets the attribute "page"
        //             loadContent(page); // calls the function to load the content
        //         });
        //     });
        // }

        // window.onload = function() {
        //     setNavListeners();
        //     loadContent("home");
        // };
    </script>
</head>

<body>
    <?php
    var_dump($_POST);
    var_dump($_SESSION);
    ?>
    <div class="headerGrid">
        <ul class="headerList nav">
            <li><a page="home" href="">Logo</a></li>
            <li><a page="store" href="">Store</a></li>
            <li><a page="store" href="">Über uns</a></li>
            <li><a page="store" href="">Kontakt</a></li>
            <li><a page="store" href="">Impressum</a></li>
        </ul>
        <ul class="headerList">
            <li><a href="public/home.php">Warenkorb</a></li>
            <li><a href="public/login.php">Login/Profil</a></li>
            <li><a href="">Sign up/Logout</a></li>
        </ul>
    </div>
    <div id="main-content"></div>
</body>

</html>