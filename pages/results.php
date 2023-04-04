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
        index.php
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Koppeling CSS -->
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/index.css">
    <!-- Koppeling JavaScript -->
    <script src="scripts/script.js" defer></script>
</head>
<body>
<!--    Include de navigatie balk-->
<?php
include("../includes/header.php");
?>

<?php

    $dominant = 0;
    $invloedrijk = 0;
    $stabiel = 0;
    $consciëntieus = 0;


//    Ge door alle antwoorden heen, geef de vraag $key variable aan en antwoord $value aan.
    foreach($_POST as $key => $value){
//     Check if de antwoord deze 4 namen bewat, tel dan de score van bij.
        if($value == "dominant"){
            $dominant++;
        }else if($value == "invloedrijk"){
            $invloedrijk++;
        }else if($value == "stabiel"){
            $stabiel++;
        }else if($value == "consciëntieus") {
            $consciëntieus++;
        }
    }

    $resultArray = array();

    $resultArray["dominant"] = $dominant;
    $resultArray["invloedrijk"] = $invloedrijk;
    $resultArray["stabiel"] = $stabiel;
    $resultArray["consciëntieus"] = $consciëntieus;

    $result = max($resultArray);

    $highestArray = array();
    foreach ($resultArray as $key => $value)
    {
        if($result == $value)
        {
            array_push($highestArray, $key);
        }
    }

    if(count($highestArray) > 1)
    {
        foreach ($highestArray as $key => $value)
        {
            echo $highestArray[$key];
        }
    }
    else
    {
        echo "Je bent een " . $highestArray[0] . "persoon";
    }
?>
<main>


</main>

</body>
</html>