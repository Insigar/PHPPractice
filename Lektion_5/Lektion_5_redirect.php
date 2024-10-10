<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="sqlTest_style.css"> -->
</head>

<body>
    <textarea readonly name="" id=""><?php
                                        if (isset($_POST["test"])) {
                                            echo $_POST["test"];
                                        } else {
                                            echo "No output";
                                        } ?></textarea>
</body>