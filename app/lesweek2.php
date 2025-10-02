<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Lesweek 2</title>
</head>
<body>
    <!-- Ik vind de tekst hieronder een beetje klein -->
    <h2>Tekst en commentaar op het scherm zetten met php</h2>


    <?php
       echo '<p>Mijn voornaam is: Arjan</p>';

       // Hieronder staat een variabele
       $achternaam = "de Ruijter";

       # Op deze manier kun je de inhoud van een variabel weergeven
       echo '<p>Mijn achternaam is: ' . $achternaam . '</p>';

       /*
            Dit is een manier om commentaar
            toe te voegen over meerdere regels
       */
       $straatnaam = 'Australielaan';
       
       /**
        * Dit heet een doc-block commentaar.
        * Je kunt meerdere regels commentaar geven
        */
       echo '<p>Straatnaam: ' . $straatnaam . '</p>';
       
       echo "<p>Straatnaam: $straatnaam </p>";

       echo '<p>Straatnaam: $straatnaam </p>';

       $getal1 = 144;

       $getal2 = 2;

       $som = $getal1 + $getal2;
       $delen = $getal1 / $getal2;
       $vermenigvuldigen = $getal1 * $getal2;
       $verschil = $getal1 - $getal2;
       $macht = $getal1 ** $getal2;
       $wortel = sqrt($getal1);

       echo "<p>De som van $getal1 + $getal2 = $som</p>";
       echo "<p>De deling van $getal1 / $getal2 = $delen</p>";
       echo "<p>De vermigvuldiging van $getal1 * $getal2 = $vermenigvuldigen</p>";
       echo "<p>Het verschil tussen $getal1 - $getal2 = $verschil</p>";
       echo "<p>$getal1 tot de macht $getal2 = $macht</p>";
       echo "<p>De wortel van $getal1 = $wortel</p>";

       // delen / , vermenigvuldigen *, verschil -, machtverheffen is ** 




    ?>
</body>
</html>