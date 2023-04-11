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
            Psycholoog Nederland - Zelftest
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Koppeling CSS -->
        <link href="../styles/stylesheet.css" rel="stylesheet">
        <link href="../styles/zelftest.css" rel="stylesheet">
    </head>
    <body>
        <!-- Header includen -->
        <?php
            include("../includes/header.php");
        ?>
        <!-- Banner met achtergrond en informatie -->
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
            <!-- Formulier -->
            <form method="post" action="results.php">
                <!-- Container met een vraag -->
                <div class="questionContainer">
                    <h3>
                        Hoe beschrijf je jezelf op feestjes?
                    </h3>
                    <input id="q1a1" type="radio" name="q1" value="dominant" required>
                    <label for="q1a1">Ik ben degene die opvalt en de show steelt.</label><br>
                    <input id="q1a2" type="radio" name="q1" value="invloedrijk">
                    <label for="q1a2">Ik ben de praatgrage, gezellige persoon die overal met iedereen kan praten.</label><br>
                    <input id="q1a3" type="radio" name="q1" value="stabiel">
                    <label for="q1a3">Ik hou ervan om met een paar goede vrienden te zijn en heb geen behoefte aan grote groepen mensen.</label><br>
                    <input id="q1a4" type="radio" name="q1" value="consciëntieus">
                    <label for="q1a4">Ik ben degene die de verantwoordelijkheid neemt om ervoor te zorgen dat iedereen het naar zijn zin heeft.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Wat motiveert jou het meest?
                    </h3>
                    <input id="q2a1" type="radio" name="q2" value="dominant" required>
                    <label for="q2a1">Ik word gemotiveerd door uitdagingen en het behalen van doelen.</label><br>
                    <input id="q2a2" type="radio" name="q2" value="invloedrijk">
                    <label for="q2a2">Ik word gemotiveerd door erkenning en waardering van anderen.</label><br>
                    <input id="q2a3" type="radio" name="q2" value="stabiel">
                    <label for="q2a3">Ik word gemotiveerd door stabiliteit en een rustige omgeving.</label><br>
                    <input id="q2a4" type="radio" name="q2" value="consciëntieus">
                    <label for="q2a4">Ik word gemotiveerd door het perfectioneren van mijn werk en het leveren van kwaliteit.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe handel je in stressvolle situaties?
                    </h3>
                    <input id="q3a1" type="radio" name="q3" value="dominant" required>
                    <label for="q3a1">Ik neem de leiding en probeer de situatie onder controle te krijgen.</label><br>
                    <input id="q3a2" type="radio" name="q3" value="invloedrijk">
                    <label for="q3a2">Ik probeer de situatie luchtiger te maken en anderen gerust te stellen.</label><br>
                    <input id="q3a3" type="radio" name="q3" value="stabiel">
                    <label for="q3a3">Ik blijf kalm en focus me op het oplossen van het probleem.</label><br>
                    <input id="q3a4" type="radio" name="q3" value="consciëntieus">
                    <label for="q3a4">Ik neem de tijd om te reflecteren op de situatie en neem vervolgens actie.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ga je om met veranderingen?
                    </h3>
                    <input id="q4a1" type="radio" name="q4" value="dominant" required>
                    <label for="q4a1">Ik ben altijd op zoek naar nieuwe uitdagingen en veranderingen.</label><br>
                    <input id="q4a2" type="radio" name="q4" value="invloedrijk">
                    <label for="q4a2">Ik kan me goed aanpassen aan veranderingen en maak er het beste van.</label><br>
                    <input id="q4a3" type="radio" name="q4" value="stabiel">
                    <label for="q4a3">Ik vind veranderingen vaak lastig en heb tijd nodig om eraan te wennen.</label><br>
                    <input id="q4a4" type="radio" name="q4" value="consciëntieus">
                    <label for="q4a4">Ik plan en bereid me voor op veranderingen om er het beste van te maken.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ga je om met fouten die je maakt?
                    </h3>
                    <input id="q5a1" type="radio" name="q5" value="dominant" required>
                    <label for="q5a1">Ik zie fouten als kansen om te leren en verbeteren.</label><br>
                    <input id="q5a2" type="radio" name="q5" value="invloedrijk">
                    <label for="q5a2">Ik zie fouten als iets wat erbij hoort en probeer het beste ervan te maken.</label><br>
                    <input id="q5a3" type="radio" name="q5" value="stabiel">
                    <label for="q5a3">Ik ben vaak streng voor mezelf als ik fouten maak en probeer ze te vermijden.</label><br>
                    <input id="q5a4" type="radio" name="q5" value="consciëntieus">
                    <label for="q5a4">Ik analyseer mijn fouten en zoek naar manieren om ze in de toekomst te voorkomen.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ben je in het nemen van risico's?
                    </h3>
                    <input id="q6a1" type="radio" name="q6" value="dominant" required>
                    <label for="q6a1">Ik ben bereid om risico's te nemen om mijn doelen te bereiken.</label><br>
                    <input id="q6a2" type="radio" name="q6" value="invloedrijk">
                    <label for="q6a2">Ik hou van het nemen van risico's en het ervaren van nieuwe dingen.</label><br>
                    <input id="q6a3" type="radio" name="q6" value="stabiel">
                    <label for="q6a3">Ik vermijd het nemen van risico's en kies voor veiligheid en zekerheid.</label><br>
                    <input id="q6a4" type="radio" name="q6" value="consciëntieus">
                    <label for="q6a4">Ik neem alleen risico's als ik er goed over heb nagedacht en het de moeite waard lijkt.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe reageer je op kritiek?
                    </h3>
                    <input id="q7a1" type="radio" name="q7" value="dominant" required>
                    <label for="q7a1">Ik zie kritiek als een uitdaging om te verbeteren en neem het serieus.</label><br>
                    <input id="q7a2" type="radio" name="q7" value="invloedrijk">
                    <label for="q7a2">Ik neem kritiek ter harte, maar probeer het niet te persoonlijk op te vatten.</label><br>
                    <input id="q7a3" type="radio" name="q7" value="stabiel">
                    <label for="q7a3">Ik vind kritiek lastig en voel me snel aangevallen.</label><br>
                    <input id="q7a4" type="radio" name="q7" value="consciëntieus">
                    <label for="q7a4">Ik neem kritiek serieus, analyseer het en gebruik het om mezelf te verbeteren.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ga je om met taken die je niet leuk vindt?
                    </h3>
                    <input id="q8a1" type="radio" name="q8" value="dominant" required>
                    <label for="q8a1">Ik doe de taken snel en efficiënt, zodat ik er zo snel mogelijk vanaf ben.</label><br>
                    <input id="q8a2" type="radio" name="q8" value="invloedrijk">
                    <label for="q8a2">Ik probeer de taken leuker te maken door er een spelletje van te maken.</label><br>
                    <input id="q8a3" type="radio" name="q8" value="stabiel">
                    <label for="q8a3">Ik vind het lastig om taken te doen die ik niet leuk vind en heb vaak motivatieproblemen.</label><br>
                    <input id="q8a4" type="radio" name="q8" value="consciëntieus">
                    <label for="q8a4">Ik maak een plan en werk stap voor stap aan de taak om het zo goed mogelijk te doen.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ga je om met deadlines?
                    </h3>
                    <input id="q9a1" type="radio" name="q9" value="dominant" required>
                    <label for="q9a1">Ik plan mijn tijd goed in en werk hard om de deadline te halen.</label><br>
                    <input id="q9a2" type="radio" name="q9" value="invloedrijk">
                    <label for="q9a2">Ik vind deadlines stressvol, maar werk goed onder druk.</label><br>
                    <input id="q9a3" type="radio" name="q9" value="stabiel">
                    <label for="q9a3">Ik hou niet van strakke deadlines en werk liever op mijn eigen tempo.</label><br>
                    <input id="q9a4" type="radio" name="q9" value="consciëntieus">
                    <label for="q9a4">Ik ben erg gestructureerd en plan mijn werk goed in om de deadline te halen.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ga je om met anderen die anders denken dan jij?
                    </h3>
                    <input id="q10a1" type="radio" name="q10" value="dominant" required>
                    <label for="q10a1">Ik respecteer andere meningen, maar ben zelfverzekerd over mijn eigen ideeën.</label><br>
                    <input id="q10a2" type="radio" name="q10" value="invloedrijk">
                    <label for="q10a2">Ik hou ervan om te discussiëren en ben open-minded voor andere ideeën.</label><br>
                    <input id="q10a3" type="radio" name="q10" value="stabiel">
                    <label for="q10a3">Ik vind het lastig om om te gaan met anderen die anders denken dan ik en heb de neiging om terug te trekken.</label><br>
                    <input id="q10a4" type="radio" name="q10" value="consciëntieus">
                    <label for="q10a4">Ik vind het interessant om te horen wat anderen te zeggen hebben en probeer begrip te tonen voor hun standpunten.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ga je om met onzekerheid en verandering?
                    </h3>
                    <input id="q11a1" type="radio" name="q11" value="dominant" required>
                    <label for="q11a1">Ik zie verandering als een uitdaging en pas me snel aan nieuwe situaties aan.</label><br>
                    <input id="q11a2" type="radio" name="q11" value="invloedrijk">
                    <label for="q11a2">Ik hou van verandering en vind het leuk om nieuwe dingen te ervaren.</label><br>
                    <input id="q11a3" type="radio" name="q11" value="stabiel">
                    <label for="q11a3">Ik vind verandering lastig en voel me onzeker in onbekende situaties.</label><br>
                    <input id="q11a4" type="radio" name="q11" value="consciëntieus">
                    <label for="q11a4">Ik bereid me goed voor op veranderingen en probeer er het beste van te maken.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ga je om met conflicten?
                    </h3>
                    <input id="q12a1" type="radio" name="q12" value="dominant" required>
                    <label for="q12a1">Ik ga confrontaties niet uit de weg en ben bereid om moeilijke beslissingen te nemen.</label><br>
                    <input id="q12a2" type="radio" name="q12" value="invloedrijk">
                    <label for="q12a2">Ik probeer conflicten te vermijden en zoek naar compromissen.</label><br>
                    <input id="q12a3" type="radio" name="q12" value="stabiel">
                    <label for="q12a3">Ik voel me ongemakkelijk bij conflicten en heb de neiging om me terug te trekken.</label><br>
                    <input id="q12a4" type="radio" name="q12" value="consciëntieus">
                    <label for="q12a4">Ik probeer het conflict op te lossen door te luisteren naar beide partijen en een oplossing te vinden die voor iedereen werkt.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ben je in het geven van feedback?
                    </h3>
                    <input id="q13a1" type="radio" name="q13" value="dominant" required>
                    <label for="q13a1">Ik ben direct en eerlijk in mijn feedback en ben niet bang om kritisch te zijn.</label><br>
                    <input id="q13a2" type="radio" name="q13" value="invloedrijk">
                    <label for="q13a2">Ik probeer positieve feedback te geven en vermijd negatieve opmerkingen.</label><br>
                    <input id="q13a3" type="radio" name="q13" value="stabiel">
                    <label for="q13a3">Ik vind het lastig om feedback te geven en heb de neiging om het uit te stellen.</label><br>
                    <input id="q13a4" type="radio" name="q13" value="consciëntieus">
                    <label for="q13a4">Ik geef constructieve feedback en probeer altijd suggesties te geven voor verbetering.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ben je in het nemen van leiderschap?
                    </h3>
                    <input id="q14a1" type="radio" name="q14" value="dominant" required>
                    <label for="q14a1">Ik neem graag de leiding en ben bereid om moeilijke beslissingen te nemen.</label><br>
                    <input id="q14a2" type="radio" name="q14" value="invloedrijk">
                    <label for="q14a2">Ik hou ervan om anderen te inspireren en te motiveren en ben graag het gezicht van de groep.</label><br>
                    <input id="q14a3" type="radio" name="q14" value="stabiel">
                    <label for="q14a3">Ik vind het lastig om de leiding te nemen en geef de voorkeur aan een ondersteunende rol.</label><br>
                    <input id="q14a4" type="radio" name="q14" value="consciëntieus">
                    <label for="q14a4">Ik neem de leiding als dat nodig is, maar ben ook bereid om anderen te ondersteunen in hun rol.</label>
                </div>
                <div class="questionContainer">
                    <h3>
                        Hoe ben je in het omgaan met details?
                    </h3>
                    <input id="q15a1" type="radio" name="q15" value="dominant" required>
                    <label for="q15a1">Ik focus me op het grotere geheel en laat details over aan anderen.</label><br>
                    <input id="q15a2" type="radio" name="q15" value="invloedrijk">
                    <label for="q15a2">Ik hou me bezig met de grote lijnen, maar let ook op de details die belangrijk zijn.</label><br>
                    <input id="q15a3" type="radio" name="q15" value="stabiel">
                    <label for="q15a3">Ik ben gericht op details en vind het belangrijk om alles goed te doen.</label><br>
                    <input id="q15a4" type="radio" name="q15" value="consciëntieus">
                    <label for="q15a4">Ik ben nauwkeurig en zorgvuldig in het omgaan met details, maar zorg er ook voor dat ik het grote plaatje niet uit het oog verlies.</label>
                </div>
                <div class="questionContainer">
                    <label>
                        Wat is jouw naam?
                    </label>
                    <input type="text" name="name" required><br>
                    <input id="voorwaarden" type="checkbox" required>
                    <label for="voorwaarden">
                        Ik ga akkoord met de voorwaarden
                    </label>
                </div>
                <input type="submit" value="Verzenden">
            </form>
        </main>
        <!-- Footer includen -->
        <?php
            include("../includes/footer.php");
        ?>
    </body>
</html>