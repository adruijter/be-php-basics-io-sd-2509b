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
    <h2>Controlestructuren</h2>

    <?php
    $getal = 16;

    if ( $getal == 8) {
        echo "<p>De waarde is 8</p>";
    } elseif ( $getal < 8) {
        echo "<p>Het getal $getal is kleiner dan 8</p>";
    } else {
        echo "<p>Het getal $getal is groter dan 8</p>";
    }

    /**
     * Opdracht maak met een if elseif else controlestructuur
     * code die je:
     * goedemorgen 
     * goedemiddag
     * goedenavond
     * goedenacht 
     * wenst
     * afhankelijk van de waarde van de variabele $dagdeel
     */

    $dagdeel = 'Patat Frites';

    // Output op het scherm:
    // Ik wens je een heel goede morgen

    if ( $dagdeel == 'morgen') {
        echo "<p>Ik wens je een heel goede morgen!</p>";
    } elseif ( $dagdeel == 'middag') {
        echo "<p>Ik wens je een heel goede middag!</p>";
    } elseif ( $dagdeel == 'avond') {
        echo "<p>Ik wens je een heel goede avond!</p>";
    } elseif ( $dagdeel == 'nacht') {
        echo "<p>Ik wens je een heel goede nacht!</p>";
    } else {
        echo "<p>Dit dagdeel is niet bekent!</p>";
    }


    /**
     * Maak voor de gebruikersrollen
     * admin
     * customer
     * moderator
     * hacker
     * superuser
     * met een switch-case een welkomstboodschap 
     * waarin de gebruikerrol wordt genoemd
     */

    $userrole = 'Patat';

    switch ($userrole) {
        case 'admin':
            echo "<p>***************</p>";
            echo "<p>Welkom admin op de admin homepage</p>";
            echo "<p>***************</p>";
            break;
        case 'customer':
            echo "<p>***************</p>";
            echo "<p>Welkom customer op de customer homepage</p>";
            echo "<p>***************</p>";
            break;
        case 'moderator':
            echo "<p>***************</p>";
            echo "<p>Welkom moderator op de moderator homepage</p>";
            echo "<p>***************</p>";
            break;
        case 'hacker':
            echo "<p>***************</p>";
            echo "<p>Hallo hacker je bent niet welkom</p>";
            echo "<p>***************</p>";
            break;
        default:
            echo "<p>Deze gebruikersrol is niet bekent</p>";
    }

    /**
     * Maak een switch case die checked welk diploma je hebt gehaalt
     * VMBO Basis, VMBO Kader, VMBO Gemengd, VMBO TL, Havo en VWO
     * 
     * Wanneer $diplomaChecker = 'VMBO TL';
     * 
     * Dan zie je op het scherm:
     * Ik heb mijn VBMO TL diploma gehaald
     * 
     * Wanneer er een onbekende opleiding is komt er op het scherm:
     * Uw opleiding is bij ons niet bekent.
     */


    ?>
</body>
</html>