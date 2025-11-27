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
        // Hoe maak je een class
        class Persoon
        {
            public $voornaam;
            public $tussenvoegsel;
            public $achternaam;
            public $geboortedatum;
            public $adres;
            public $huisnummer;
            public $stad;

            // We gaan nu een constructor maken. Deze wordt automatisch aangeroepen wanneer je een object maakt.
            public function __construct(
                $voornaam, 
                $tussenvoegsel, 
                $achternaam, 
                $geboortedatum,
                $adres,
                $huisnummer,
                $stad
            ) {
                $this->voornaam = $voornaam;
                $this->tussenvoegsel = $tussenvoegsel;
                $this->achternaam = $achternaam;
                $this->geboortedatum = $geboortedatum;
                $this->adres = $adres;
                $this->huisnummer = $huisnummer;
                $this->stad = $stad;
            }

            public function volledigeNaam()
            {
                return "<p>Mijn volledige naam is: $this->voornaam $this->tussenvoegsel $this->achternaam</p>
                        <p>Mijn geboortedatum is: $this->geboortedatum</p>
                        <p>Mijn adres is: $this->adres $this->huisnummer, $this->stad</p><hr>";
            }
        }

        // We maken een object van de klasse Persoon met het woordje new
        $persoon1 = new Persoon('Bert', '', 'Versluis', '12-02-2007', 'Planetenweg', 17, 'Amsterdam');

        // We stoppen een naam in de klasse-variabele voornaam
        // $persoon1->voornaam = 'Arjan';
        // $persoon1->tussenvoegsel = 'de';
        // $persoon1->achternaam = 'Ruijter';

        // We zetten de naam op het scherm
        // echo $persoon1->voornaam;
        // echo $persoon1->achternaam;

        echo $persoon1->volledigeNaam();

        // We maken een nieuw object aan
        $persoon2 = new Persoon('Sandra', 'van', 'Lent', '30-08-2005', 'Boomstraat', 20, 'Utrecht');
        echo $persoon2->volledigeNaam();

        // Opdracht breid de class uit met de geboortedatum zodat je als output krijgt van de volledigeNaam() functie:
        // Mijn volledige naam is: Arjan de Ruijter
        // Mijn geboortedatum is: 12-02-2008






    ?>
    
</body>
</html>