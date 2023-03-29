<?php
/**
 * User: Jesse Copier
 * Date: 22/03/2023 14:30
 * File: zelftest.php
 *
 * Omschrijving: De pagina met de zelftest
 */
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        zelftest.php
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Koppeling CSS -->
    <link href="../styles/stylesheet.css" rel="stylesheet">
    <link href="../styles/zelftest.css" rel="stylesheet">
</head>
<body>
    <?php
    include("../includes/header.php");
    ?>
    <div id="zelftestBanner">
        <article>
            <h1>
                Zelftest
            </h1>
            <h2>
                Bepaal welke persoonlijkheid bij jou past!
            </h2>
            <p class="headerP">
                <strong>
                    De DISC-methode categoriseert persoonlijkheden in vier types: Dominant, Invloedrijk, Stabiel en Consciëntieus.
                    Bij elke vraag kies je het antwoord dat het beste bij jou past.
                    Elke vraag heeft vier mogelijke antwoorden.
                    Aan het einde van de test wordt je score berekend en krijg je te zien welke persoonlijkheid het best bij jou past!
                </strong>
            </p>
        </article>
    </div>
    <main>
        <form>
            <div class="questionContainer">
                <h3>
                    Question
                </h3>
            </div>
        </form>
    </main>
</body>
</html>