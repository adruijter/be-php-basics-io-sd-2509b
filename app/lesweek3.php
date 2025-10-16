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
    <h2>Datatypen met PHP</h2>

    <?php
        // Hieronder staat een string variabele
        $sport = 'Voetbal';
        echo "<p>Mijn sport is $sport</p>";

        $snack = "bitterbal";
        echo "<p>Mijn favoriete snack is $snack</p>";
        echo '<p>Mijn favoriete snack is $snack</p>';

        // Integer variabele mag positief of negatief zijn maar wel een geheel getal
        $leeftijd = 57;
        echo "<p>Mijn leeftijd is $leeftijd</p>";

        // Float is een positief of negatief kommagetal. De komma schrijf je met een punt
        $prijs = 4.65;
        echo "Mijn heerlijke turkse pizza was &euro; $prijs";

        // Boolean variabele kan twee waarden aannemen true of false, 1 of 0
        $wordIkMiljonairLater = false;

        if ($wordIkMiljonairLater) {
            echo "<p>Ik wordt miljonair later</p>";
        } else {
            echo "<p>Ik wordt gelukkig</p>";
        }


        /**
         * Een indexed array is een variabele waarin je meerdere waarden kunt opslaan. 
         * Iedere waarde in het array heeft een getalletje aan zich gekoppeld 
         */
        
        $repen = [
            'mars',
            'Twix',
            'KitKat',
            'Bounty',
            'Milky way',
            'Snickers',
            'Galaxy'
        ];

        // Zet op het scherm de zin Mijn favoriete reep is een Twix
        echo "<p>Mijn favoriet reep is $repen[6]</p>";


        $games = [
            'Tomb Raider',
            'Kings Valley',
            'Donkey Kong',
            'War of the world',
            'Texmex'
        ];

        echo "<p id='rood'>Mijn favoriete games</p>";
        echo "<p>====================</p>";
        echo "<ol>";
        echo "<li>$games[0]</li>";
        echo "<li>$games[1]</li>";
        echo "<li>$games[2]</li>";
        echo "<li>$games[3]</li>";
        echo "<li>$games[4]</li>";
        echo "</ol>";

        // Dit is een associatief array 
        $persoonsgegevens = [
            'voornaam' => 'Arjan',
            'tussenvoegsel' => 'de',
            'achternaam' => 'Ruijter',
            'straatnaam' => 'Prins Hendrikstraat',
            'straatnummer' => 59,
            'woonplaats' => 'Utrecht',
            'postcode' => '1051 XM',
            'leeftijd' => 57
        ];

        echo "<p>Mijn naam is: {$persoonsgegevens['voornaam']} {$persoonsgegevens['tussenvoegsel']} {$persoonsgegevens['achternaam']}</p>";
        echo "<p>Ik woon in de: {$persoonsgegevens['straatnaam']} {$persoonsgegevens['straatnummer']}</p>";
        echo "<p>In de stad: {$persoonsgegevens['woonplaats']} {$persoonsgegevens['postcode']}</p>";
        echo "<p>Ik ben {$persoonsgegevens['leeftijd']} jaar oud</p>";


        // Maak een associatief array met de top 5 snelste auto's ter wereld
        $snelle_auto = [
            'Koenigsegg Jesko Absolut' => 499,
            'Yangwang U9 Xtreme' => 496,
            'SSC Tuatara' => 295,
            'Bugatti W16 Mistral Roadster' => 282,
            'Czinger 21C V Max' => 281
        ];

        echo "<p>=====================</p>";
        echo "<p>De Top 5 snelste auto's ter wereld</p>";
        echo "<p>=====================</p>";
        echo "<ol>";
        echo "<li>Koenigsegg Jesko Absolut => {$snelle_auto['Koenigsegg Jesko Absolut']} km/u</li>";
        echo "<li>Yangwang U9 Xtreme => {$snelle_auto['Yangwang U9 Xtreme']} km/u</li>";
        echo "<li>SSC Tuatara => {$snelle_auto['SSC Tuatara']} km/u</li>";
        echo "<li>Bugatti W16 Mistral Roadster => {$snelle_auto['Bugatti W16 Mistral Roadster']} km/u</li>";
        echo "<li>Czinger 21C V Max => {$snelle_auto['Czinger 21C V Max']} km/u</li>";
        echo "</ol>";

        // Associatieve array
        $sneakers = [
            'Adidas' => 234.50,
            'Nike' => 198.88,
            'Puma' => 295,
            'Asics' => 345.50,
            'New Balance' => 12.98,
            'Vans' => 234,
            'Reebok' => 200,
            'Converse' => 128.99
        ];

        echo "<p>******************</p>";
        echo "<p>Mijn favoriete sneakers</p>";        
        echo "<p>******************</p>";

        echo "<p>schoen 1: Adidas => &euro; {$sneakers['Adidas']}</p>";
        echo "<p>schoen 2: Nike =>  &euro; {$sneakers['Nike']}</p>";
        echo "<p>schoen 3: Puma => &euro; {$sneakers['Puma']}</p>";
        echo "<p>schoen 4: Asics => &euro; {$sneakers['Asics']}</p>";
        echo "<p>schoen 5: New Balance => &euro; {$sneakers['New Balance']}</p>";
        echo "<p>schoen 6: Vans => &euro; {$sneakers['Vans']}</p>";
        echo "<p>schoen 7: Reebok => &euro; {$sneakers['Reebok']}</p>";
        echo "<p>schoen 8: Converse &euro; {$sneakers['Converse']}</p>";

    ?>

</body>
</html>