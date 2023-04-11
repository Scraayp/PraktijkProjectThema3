<?php
/**
 * User: Michal Kolasa
 * Date: 17/03/2023 13:50
 * File: index.php
 *
 * Omschrijving: De hoofdpagina van de website
 */

//  ron wuz here
// Dit is de footer
?>

<footer>
    <div id="leftFooter">
        <img src="/Praktijk/Project/PraktijkProjectThema3/images/foto-footer.png" width="75" height="92">
        <hr>
        <p class="textGray">Info@psycholoognederland.org<br>Telefoon: 085 0645864</p>
        <hr>
        <a>Locaties & Psychologen -></a>
    </div>
    <div id="divider"></div>
    <div id="rightFooter">
        <h3 class="footerH3">Algemene informatie</h3>
        <a>Meer weten -></a>
        <a>Vergoeding -></a>
        <a>Contact -></a>
        <h3 class="footerH3">Datum</h3>
        <?php
            $date = date("d-n-y");
            $hour = date("H:i:s");
            echo "<p>" . $date . "</p>";
            echo "<p>" . $hour . "</p>";
        ?>
    </div>
</footer>