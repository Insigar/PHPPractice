<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="test.css">
</head>

<body>

    <div class="t_img">

        <img class="pp" src="../Untitled.png" alt="Oberbürgermeister ">

        <p class="textfeld">

            <?php
            $dbText = "Begrüßungstext BEGRÜSSUNGSTEXT_ENDE Profiltext";
            $delimStr = "BEGRÜSSUNGSTEXT_ENDE";
            $delimStrLength = strlen($delimStr);
            $begruessung = substr($dbText, 0, strpos($dbText, $delimStr));
            $profilText = substr($dbText, $delimStrLength + strpos($dbText, $delimStr));
            echo $begruessung . "<br>";
            echo $profilText;
            ?>

            <!-- Name: echo $oberbuergermeister['Person_Vorname'] . " " . $oberbuergermeister['Person_Name'];<br>
            Geboren am: echo $oberbuergermeister['Person_Geb_Datum']; <br>
            Partei: echo $oberbuergermeister['Mitarbeiter_Partei']; <br>
            Seit echo $oberbuergermeister['Mitarbeiter_Amtszeit']; Oberbürgermeister <br><br>

            echo $oberbuergermeister['Mitarbeiter_Profiltext']; -->
        </p>

    </div>
</body>