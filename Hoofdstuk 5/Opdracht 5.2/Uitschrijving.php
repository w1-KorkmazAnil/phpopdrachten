<?php
    include '../../Includes/header.php';
    include '../../Includes/sidemenu.php';
    include '../../Includes/footer.php';
?>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <table>
                <tr>
                    <td>Voor en achternaam</td>
                    <td><?php echo $_GET['firstAndLastname']; ?></td>
                </tr>
                <tr>
                    <td>Studentennummer</td>
                    <td><?php echo $_GET['studentNumber']; ?></td>
                </tr>
                <tr>
                    <td>Datum van uitschrijving</td>
                    <td><?php echo $_GET['dateOfDeregistration']; ?></td>
                </tr>
                <tr>
                    <td>Reden van uitschrijving</td>
                    <td>
                        <?php
                        $eenReden = $_GET["reden"];

                        if($eenReden == "NietLeuk")
                        {
                            echo("Ik vind het niet zo leuk.");
                        }
                        else if ($eenReden == "teMoeilijk")
                        {
                            echo("Ik vind het te moeilijk.");
                        }
                        else if ($eenReden == "geschorst")
                        {
                            echo("Ik ben geschorst.");
                        }
                        else if ($eenReden == "andereSchool")
                        {
                            echo("Ik ga naar een andere school.");
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Leerjaar</td>
                    <td><?php echo $_GET['leerjaar']; ?></td>
                </tr>
                <tr>
                    <td>Aanmelden bij de succesklas:</td>
                    <td>
                        <?php
                            if (!empty($_GET['aanmelden']))
                            {
                                echo "Ja";
                            }
                            else
                            {
                                echo "Nee";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Verwijderen gegevens:</td>
                    <td>
                        <?php
                        if (!empty($_GET['verwijder'])) {
                            echo "Ja";
                        }
                        else {
                            echo "Nee";
                        }
                        ?>
                        </td>
                    </tr>
                <tr>
                    <td colspan="2">Reden van uitschrijving:</td>
                </tr>
                <tr>
                    <td colspan="2"><?php echo $_GET['redenUitschrijving']; ?></td>
                </tr>

            </table>

        </main>
    </body>
</html>
