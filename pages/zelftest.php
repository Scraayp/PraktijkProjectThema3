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
                    Hoe beschrijf je jezelf op feestjes?
                </h3>
                <input type="radio" name="q1" value="dominant">
                <label>Ik ben degene die opvalt en de show steelt.</label><br>
                <input type="radio" name="q1" value="invloedrijk">
                <label>Ik ben de praatgrage, gezellige persoon die overal met iedereen kan praten.</label><br>
                <input type="radio" name="q1" value="stabiel">
                <label>Ik hou ervan om met een paar goede vrienden te zijn en heb geen behoefte aan grote groepen mensen.</label><br>
                <input type="radio" name="q1" value="consciëntieus">
                <label>Ik ben degene die de verantwoordelijkheid neemt om ervoor te zorgen dat iedereen het naar zijn zin heeft.</label>
            </div>
            <div class="questionContainer">
                <h3>
                    Wat motiveert jou het meest?
                </h3>
                <input type="radio" name="q2" value="dominant">
                <label></label><br>
                <input type="radio" name="q2" value="invloedrijk">
                <label></label><br>
                <input type="radio" name="q2" value="stabiel">
                <label></label><br>
                <input type="radio" name="q2" value="consciëntieus">
                <label></label>
            </div>
            <div class="questionContainer">
                <h3>
                    Wat motiveert jou het meest?
                </h3>
                <input type="radio" name="q3" value="dominant">
                <label>Answer 1</label><br>
                <input type="radio" name="q3" value="invloedrijk">
                <label>Answer 2</label><br>
                <input type="radio" name="q3" value="stabiel">
                <label>Answer 3</label><br>
                <input type="radio" name="q3" value="consciëntieus">
                <label>Answer 4</label>
            </div>
        </form>
    </main>
</body>
</html>