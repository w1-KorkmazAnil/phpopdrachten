<?php
include '../../Includes/header.php';
include '../../Includes/sidemenu.php';
?>

    <?php
        $event = " Elfstedentocht "; //String
        $fries = " Alvestêdetocht"; //String
        $distance = 200;             //Integer
        $sport = " schaatstocht ";    //String
        $kind = " natuurijs ";       //String
        $organizer = " Koninklijke Vereniging De Friesche Elf Steden"; //String
        $capital = " Leeuwarden";      //String
        $land = " Friesland";       //String
        $timesRode = 15;                 //Integer
        $year = 1909;                //Integer
        $timesHeld = 1;              //Integer

        $verhaal = "De" . $event . "(Fries:" . $fries . ") is een " . $distance . " kilometer"
        . "lange " . $sport . "over" . $kind . " die wordt georganiseerd door "
        . "de" . $organizer . ". " . $capital . ","
        . " de hoofdstad van " . $land . ", is start- en aankomstplaats. De"
        . $event . " is inmiddels " . $timesRode . " maal verreden en werd voor het "
        . "eerst in " . $year . " gereden en wordt maximaal " . $timesHeld . " keer per winter gehouden.";
    ?>

        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <?php
                echo "<p>" . $verhaal . "</p>";
            ?>
            <br>
            <h4>Taak 2 is al gedaan bij taak 1.</h4>
        </main>
    </body>
</html>

