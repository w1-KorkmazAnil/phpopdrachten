<?php
include '../../Includes/header.php';
include '../../Includes/sidemenu.php';
include '../../Includes/footer.php';
?>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
                <h3>
                    Kalender van volgende week:
                </h3>
                <?php
                for ($Counter = 0; $Counter <= 7; $Counter++)
                    {
                        $add = strtotime("now +" . $Counter . "days");
                        $day = date('w', $add);
                        $date = date('l d-n-Y', $add);
                        echo "<p>" . "Dag " . $day . " is " . $date . "<br>" . "</p>";
                    }
                ?>
        </main>
    </body>
</html>
