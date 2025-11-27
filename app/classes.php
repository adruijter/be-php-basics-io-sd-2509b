<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Klassen en Objecten</title>
</head>
<body>

    <h2>Klassen en Objecten</h2>

    <?php
        // Hoe maak je class
        class Persoon
        {
            public $voornaam;
            public $tussenvoegsel;
            public $achternaam;

            // We gaan nu een constructor maken. Deze wordt automatisch aangeroepen wanneer je een object maakt.
            public function __construct($voornaam, $tussenvoegsel, $achternaam)
            {
                $this->voornaam = $voornaam;
                $this->tussenvoegsel = $tussenvoegsel;
                $this->achternaam = $achternaam;
            }

            public function volledigeNaam()
            {
                echo "<p>Mijn volledige naam is: $this->voornaam $this->tussenvoegsel $this->achternaam</p><hr>";
            }
        }

        // We maken een object van de klasse Persoon met het woordje new
        $persoon1 = new Persoon('Bert', '', 'Versluis');

        // We stoppen een naam in de klasse-variabele voornaam
        // $persoon1->voornaam = 'Arjan';
        // $persoon1->tussenvoegsel = 'de';
        // $persoon1->achternaam = 'Ruijter';

        // We zetten de naam op het scherm
        // echo $persoon1->voornaam;
        // echo $persoon1->achternaam;

        $persoon1->volledigeNaam();

        // We maken een nieuw object aan
        $persoon2 = new Persoon('Sandra', 'van', 'Lent');
        $persoon2->volledigeNaam();




    ?>
    
</body>
</html>