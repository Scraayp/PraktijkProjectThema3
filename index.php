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
            Psycholoog Nederland - Home
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Koppeling CSS -->
        <link rel="stylesheet" href="styles/stylesheet.css">
        <link rel="stylesheet" href="styles/index.css">
        <!-- Koppeling JavaScript -->
    </head>
    <body>
<!--    Include de navigatie balk-->
    <?php
    include("includes/header.php");
    ?>
        <main>
<!--            Banner met het plaatje ering die bovenaan de pagina staat           -->
            <div id="mainBanner">
<!--                          Text binnen de banner                                 -->
                <div id="textContainer">
                    <h1>
                        Psycholoog Nederland
                    </h1>
                    <h2>
                        Helpt je weer de juiste richting op.
                    </h2>
                    <p>
                        <strong>
                        Wij zijn een GGZ-instelling met monodisciplinaire en de multidisciplinaire behandelingen.
                        Wij streven ernaar geen wachtlijsten te hebben.
                        Wij behandelen volwassenen met o.a. angsten, depressie en somatoforme klachten.
                        </strong>
                    </p>
<!--                    Div voor styling knopjes                                    -->
                    <div id="buttons">
                        <a href="" class="button">Neem contact op</a>
                        <a href="pages/zelftest.php" class="button">Doe de zelftest!</a>
                    </div>
                </div>
            </div>
            <!--            Banner met de 3 blokjes text                            -->
            <div id="articles">
                <div class="article">
                    <h2>
                        Geen wachtlijst
                    </h2>
                    <p>
                        Wij zijn een GGZ-instelling met monodisciplinaire en de multidisciplinaire behandelingen.
                        Wij streven ernaar geen wachtlijsten te hebben.
                        Wij behandelen volwassenen met o.a. angsten, somatoforme klachten, depressie en persoonlijkheidsproblematiek
                    </p>
                </div>
                <div class="article">
                    <h2>
                        Vergoeding
                    </h2>
                    <p>
                        Onze behandelingen worden vanuit de basisverzekering vergoed.
                        Je hebt hiervoor een verwijsbrief van de huisarts nodig.
                        Afhankelijk van je zorgverzekering wordt alles of een deel vergoed.
                        Kijk hiervoor bij ‘vergoedingen’ of een eigen bijdrage van toepassing is.
                    </p>
                </div>
                <div class="article">
                    <h2>
                        Onze locaties
                    </h2>
                    <p>
                        Psycholoog Nederland heeft meerdere locaties in het land. Onze grootste vestigingen zijn in Amsterdam, Utrecht, Hilversum en Rotterdam.
                        Hier zitten behandelteams van rond de 15 tot 20 behandelaren. Je kunt meestal binnen één week al terecht voor een intake.
                    </p>
                </div>
            </div>
        </main>
            <!--            Footer includen                                 -->
            <?php
            include("includes/footer.php");
            ?>
    </body>
</html>