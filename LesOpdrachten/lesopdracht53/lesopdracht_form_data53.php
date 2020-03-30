<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.

require "lesopdracht_functions53.php";
?>


<table>
    <tr>
        <td>Voornaam</td>
        <td><?php echo $_POST['firstname']; ?></td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Tussenvoegsel</td>
        <td>
            <?php
                if(!empty($_GET['firstname'])) {
                    echo "voornaam: " . $_GET['firstname'];}
                    ?>
        </td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Achternaam</td>
        <td><?php echo $_POST['lastname']; ?></td>
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td>
            <?php
            if($_POST['subject'] == 'js') {
                $textjs = getTeacherName();
                echo $textjs;
            }
            ?>
        </td>
    </tr>
</table>