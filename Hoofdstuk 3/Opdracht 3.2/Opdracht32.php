<?php
include '../../Includes/header.php';
include '../../Includes/sidemenu.php';

/**
 * User: Anil Korkmaz
 * Date: 2-3-2020
 * Time: 15:22
 * File: Opdracht32.php
 */
?>

<?php
    // declareren en initialiseren van variabelen
    $trafficLightColor = "groen";
    $ambulanceComing = false;
    $driveOn = false;

    $countryName = "Nederland";
    $currentAge = 16;
?>

        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <?php
                // Maken van een if/else statement
                if ($trafficLightColor == "groen" && $ambulanceComing == false)
                {
                    $driveOn = true;
                }
                elseif($ambulanceComing == true || $trafficLightColor == "rood" || $trafficLightColor == "oranje")
                {
                    $driveOn = false;
                }

                if($driveOn == true)
                {
                    echo "<p>" . "U kunt doorrijden" . "</p>";
                }
                else
                {
                    echo "<p>" . "U moet stoppen" . "</p>";
                }
            ?>
            <?php
                // Maken van een if/else statemant
                if ($countryName == "Zweden" && $countryName == "Bulgarije" && $countryName == "Nederland" && $currentAge < 18
                    || $countryName == "België" && $currentAge <= 16 || $countryName == "Cyprus" && $currentAge <= 17)
                {
                    echo "U mag niets drinken";
                }
                elseif ($countryName == "België" && $countryName == "Bulgarije" && $countryName == "Nederland" && $currentAge >= 18
                    || $countryName == "Cyprus" && $currentAge > 17)
                {
                    echo "U mag alle dranken drinken";
                }
                elseif ($currentAge >= 20 && $countryName == "Zweden")
                {
                    echo "U mag alle dranken drinken";
                }
                else
                {
                    echo "U mag alleen zwakke dranken drinken";
                }
            ?>
        </main>
    </body>
</html>
