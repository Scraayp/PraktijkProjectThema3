<?php
/**
 * User: Michal Kolasa
 * Date: 17/03/2023 13:50
 * File: index.php
 *
 * Omschrijving: De hoofdpagina van de website
 */

//  ron wuz here
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            Psycholoog Nederland - Resultaten
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Koppeling CSS -->
        <link rel="stylesheet" href="../styles/stylesheet.css">
        <link rel="stylesheet" href="../styles/results.css">
    </head>
    <body>
        <!-- Include de navigatie balk -->
        <?php
            include("../includes/header.php");
        ?>
        <div id="resultsBanner">
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
            <?php
                // Als er geen cookie is, verwijzen we de browser naar de zelftest
                if (!isset($_COOKIE["resultaat"]) && !$_POST)
                {
                    // Verwijs de browser naar de locatie ./zelftest.php
                    header("Location: ./zelftest.php");
                    // Exit de code zodat je niet in een loop wordt.
                    exit();
                }

                // Als we een cookie hebben maar geen formulier submissie
                if (isset($_COOKIE["resultaat"]) && !$_POST)
                {
                    // Laat de resultaat zien van de cookie
                    echo "<h3>" . $_COOKIE["resultaat"] . "</h3>";
                }
                // Als we een formulier submissie hebben maar geen cookie
                else
                {

                    $dominant = 0;
                    $invloedrijk = 0;
                    $stabiel = 0;
                    $consciëntieus = 0;


                    // Ga door alle antwoorden heen, geef de vraag $key variable aan en antwoord $value aan.
                    foreach ($_POST as $key => $value)
                    {
                        // Check if de antwoord deze 4 namen bewat, tel dan de score van bij.
                        if ($value == "dominant")
                        {
                            $dominant++;
                        }
                        else if ($value == "invloedrijk")
                        {
                            $invloedrijk++;
                        }
                        else if ($value == "stabiel")
                        {
                            $stabiel++;
                        }
                        else if ($value == "consciëntieus")
                        {
                            $consciëntieus++;
                        }
                    }

                    // Maak een lege array aan
                    $resultArray = array();

                    $resultArray["dominant"] = $dominant;
                    $resultArray["invloedrijk"] = $invloedrijk;
                    $resultArray["stabiel"] = $stabiel;
                    $resultArray["consciëntieus"] = $consciëntieus;

                    // Kijk wat het hoogste getal is
                    $result = max($resultArray);

                    // Maak een array met hogste cijfers
                    $highestArray = array();
                    // Loop door alle resultaten
                    foreach ($resultArray as $key => $value)
                    {
                        // Check of de resultaat de hoogste resultaat nummer is
                        if ($result == $value)
                        {
                            // Voeg dan de naam toe aan de array
                            array_push($highestArray, $key);
                        }
                    }

                    // Zet de cookie aantwoord een lege string
                    $cookie_value = "";
                    // Als we gelijkspel hebben
                    if(count($highestArray) > 1)
                    {
                        // Zet de cookie value: Vorige cookie value en Je bent een
                        $cookie_value = $cookie_value ."je bent een ";
                        foreach ($highestArray as $key => $value)
                        {
                            if (count($highestArray) - 1 == $key)
                            {
                                // Zet de cookie value
                                $cookie_value = $cookie_value . $highestArray[$key];
                            }
                            else
                            {
                                // Zet de cookie value
                                $cookie_value = $cookie_value . $highestArray[$key]  . ", ";
                            }
                        }
                        // Zet de cookie value
                        $cookie_value = $cookie_value . " persoon.";
                    }
                    else
                    {
                        // Zet de cookie value
                        $cookie_value = "je bent een " . $highestArray[0] . " persoon.";
                    }

                    // Voeg de naam aan het resultaat toe
                    $cookie_value = $_POST["name"] . ", " . $cookie_value;

                    // echo het resultaat op de pagina
                    echo "<h3>" . $cookie_value . "</h3>";

                    // Maak een cookie aan met naam resultaat en value hierboven. Tijd dat het een dag is
                    setcookie("resultaat", $cookie_value, time() + (86400 * 30), "/"); // 86400 ms is een dag
                }
            ?>
        </main>
        <!-- Footer includen -->
        <?php
            include("../includes/footer.php");
        ?>
    </body>
</html>