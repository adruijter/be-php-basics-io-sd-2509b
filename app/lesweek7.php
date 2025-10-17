<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>PHP Basics</title>
</head>
<body>
    <h2><u>Loops in PHP</u></h2>

    <?php
       /**
        * Dit zijn voorbeelden van een for-loop
        */
       for ($i=1; $i<=10; $i++) {
            echo "<p>$i</p>";
       }

       for ($i=1; $i<=10; $i++) {
            echo "<p>" . str_repeat('*', $i) . "</p>";
       }

       for ($i=10; $i>=1; $i--) {
            echo "<p>" . str_repeat('*', $i) . "</p>";
       }

       // Dit is een indexed array
       $sneakers = [
            'Asics',
            'Reebok',
            'Nike'
       ];

       for ($i=0; $i<3; $i++ ){
            echo "<p>$sneakers[$i]</p>";
       }

       /**
        * Foreach loop
        */

       $dieren = [
            'hond',
            'kat',
            'vis'
       ];

       foreach ($dieren as $dier) {
            echo "<p>$dier</p>";
       }

       $snoep = [
            'Mars',
            'Raider',
            'Twix',
            'Nuts',
            'Milky Way',
            'Snickers',
            'Galaxy'
       ];

       echo "<p>Mijn top 7 snoeplijst</p>";
       echo "==============";

       echo "<ol>";
       foreach ($snoep as $reep) {
            echo "<li>$reep</li>";
       }
       echo "</ol>";


    ?>
</body>
</html>