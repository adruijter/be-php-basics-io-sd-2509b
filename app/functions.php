<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Functies</title>
</head>
<body>
    <h2><u>Functies in PHP</u></h2>

    <?php
        $voornaam = 'Arjan';
        $tussenvoegsel = 'de';
        $achternaam = 'Ruijter';

        // echo "<p>Mijn naam is: $voornaam $tussenvoegsel $achternaam</p>";

        $voornaam_1 = 'Bert';
        $tussenvoegsel_1 = 'de';
        $achternaam_1 = 'Vries';

        // echo "<p>Mijn naam is: $voornaam_1 $tussenvoegsel_1 $achternaam_1</p>";


        function volledigeNaam($voornaam, $tussenvoegsel, $achternaam, $geboortedatum)
        {
           echo "<p>Mijn volledige naam is: $voornaam $tussenvoegsel $achternaam</p>
                 <p>Mijn geboortedatum is: $geboortedatum</p><hr>"; 
        }

        volledigeNaam('Arjan', 'de', 'Ruijter', '30-08-1968');
        volledigeNaam('Youssef', '', 'Saidi', '20-01-2000');
        volledigeNaam('Imrani', 'El', 'Walid', '12-03-2002');


        

    ?>
</body>
</html>