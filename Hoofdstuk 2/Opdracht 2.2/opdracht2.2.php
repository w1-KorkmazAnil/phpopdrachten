<?php
include '../../Includes/header.php';
include '../../Includes/sidemenu.php';
include '../../Includes/footer.php';
?>

        <?php
            //String
            $text01 = "Hallo";
            $text02 = " een makkelijke taal";
            $text03 = "toch zo'n makkelijke taal ";
            $text04 = "wat is ";
            $text05 = "PHP ";
            $text06 = "Nooit gedacht dat ";
            $text07 = "De installatie is best ingewikkeld";
            $text08 = "Fijn ";
            $text09 = "?";
            $text10 = ". ";
            $text11 = ", ";
            $text12 = "<br>";
            $text13 = "is";
            $text14 = "Vind je niet";
            $text15 = "toch";
        ?>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <h3>Taak 2</h3>
                <?php
                    echo "<p>" . $text01 . $text11 . $text04 . $text05 . $text15 . $text02 . $text10 . $text12 . "</p>";
                    echo "<p>" . $text07 . $text10 . $text08 . $text15 . $text09 . $text12 . "</p>";
                    echo "<p>" . $text06 . $text05 . $text03 . $text13 . $text10 . "</p>";
                ?>
            <h3>Taak 3</h3>
                <?php
                    echo "<p>" . $text01 . $text11 . $text12 . "</p>";
                    echo "<p>" . $text08 . $text15 . " dat " . $text05 . "zo'n makkelijke taal " . $text13 . $text10 . $text12 . "</p>";
                    echo "<p>" . $text07 . $text10 . $text14 . $text09 . "</p>";
                ?>
        </main>
    </body>
</html>

