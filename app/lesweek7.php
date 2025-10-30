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

       

       $leeftijden = [
          'Arjan' => 57,
          'Bert' => 13,
          'Evelien' => 23,
          'Johan' => 18
       ];


       foreach ($leeftijden as $voornaam => $leeftijd) {
          echo "<p>Mijn naam is: $voornaam en mijn leeftijd is: $leeftijd.</p>";
       }

        //  maak een associatief array met daarin 5 sportclubnamen en de stad waaruit ze komen. 
        //  Geef de inhoud van het array weer met behulp van een foreach-loop.

        $sportclubs = [
          'Feyenoord' => 'Rotterdam',
          'Ajax' => 'Amsterdam',
          'FC Den Haag' => 'Den Haag',
          'FC Zwolle' => 'Zwolle',
          'NAC' => 'Breda'
        ];

        foreach ($sportclubs as $club => $stad) {
          echo "<p>De sportclub $club komt uit $stad.</p>";
        }


        $teller = 1;
        while ($teller <= 10) {
          echo "<p>$teller</p>";
          $teller++;
        }


        // Gebruik de while -loop om het volgende array op het scherm te zetten
        $dieren = [
          'Kameel', //0
          'Kat',    //1
          'Beer',   //2
          'Gorilla',//3
          'Leeuw'   //4
        ];

        /**
         * De while loop
         */

        $teller = 0;
        echo "<p><u>dierenlijst</u></p>";
        while ($teller <= 4) {
          echo "<p>$dieren[$teller]</p>";
          $teller++;
        }
        
        
        /**
         * Do-while loop wordt minimaal 1 keer uitgevoerd
         * Tel met deze do-while loop de getallen 1 t/m 5 bij elkaar op, dus er komt 14 uit
        */
        
        $index = 1;
        $uitkomst = 0;
        do {
             // Bedenk code dat het werkt hier...
             $uitkomst = $uitkomst + $index;
             $index++;
        } while ($index <= 5);
          
        echo "<p>Alle getallen van 1 t/m 5 bij elkaar opgetelt is: $uitkomst</p>";
          
        // Opdracht do-while:
        // Gebruik het array $dieren om de dieren af te beelden op het scherm
        
        $index = 0;
        echo "<p><u>Het dierenlijstje</u></p>";
        do {
          echo "<p>$dieren[$index]</p>";
          $index++;
        } while ($index <= 4);


    ?>
</body>
</html>