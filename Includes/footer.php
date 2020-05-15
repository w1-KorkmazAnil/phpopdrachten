
<footer>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");

    if ($uur >= 0 && $uur < 5)
    {
        echo "Goedennacht";
    }
    elseif ($uur >= 5 && $uur < 12)
    {
        echo "Goedenochtend";
    }
    elseif ($uur >= 12 && $uur < 17)
    {
        echo "Goedenmiddag";
    }
    else
    {
        echo "Goedenavond";
    }
    ?>

    <?php
       include 'variabelen.php';
        echo " bezoeker, " . "&copy " . $name . $year;
    ?>

    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        $bezoeker = $_SESSION['username']. "&nbsp;<a
    href='/phpopdrachten/hoofdstuk6/loguit.php'>Loguit</a>";
    }
    else {
        $bezoeker = "onbekende bezoeker". "&nbsp;<a
    href='/../phpopdrachten/Hoofdstuk%206/Opdracht%206.1/Opdracht61.php'>Login</a>";
    }
    echo $bezoeker;
    ?>
</footer>