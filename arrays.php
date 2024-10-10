<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    $indexedArray = array("wert00", "wert01", "wert02");
    $indexedArray2 = array("wert10", "wert11", "wert12");
    echo $indexedArray[1];
    echo "<br>";
    $associativeArray = array(
        "Marke" => "Toyota",
        "key2" => "wert2",
        "key3" => "wert3"
    );
    echo $associativeArray["Marke"];
    echo "<br>";
    $multiArray = array($indexedArray, $indexedArray2);
    echo $multiArray[1][2];
    echo "<br>";
    echo var_dump($multiArray);

    ?>
</body>