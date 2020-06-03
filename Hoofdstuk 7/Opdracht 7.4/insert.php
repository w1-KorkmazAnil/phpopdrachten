<?php

include '../../Includes/functions.php';
include '../../Includes/header.php';
include '../../Includes/sidemenu.php';
include '../../Includes/footer.php';
startConnection();
?>
        <main id="wrapper">
            <form action="insert.php" method="post">
                <h2>Uitwerkingen</h2>
                <h3>
                    Nieuwe grap toevoegen
                </h3>
                <table>
                    <tr>
                        <td>
                            Joketext:
                        </td>
                        <td>
                            <input name="joketext" type="text" placeholder="Joketext">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Jokeclou:
                        </td>
                        <td>
                            <input name="jokeclou" type="text" placeholder="Jokeclou">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="button" value="Verstuur">
                        </td>
                    </tr>
                </table>
                <?php
                if (isset($_POST["button"]))
                {
                    if (empty($_POST["joketext"]) || empty($_POST["jokeclou"]))
                    {
                        echo "<p>Zijn alle velden ingevuld?</p>";
                        exit();
                    }
                    if(isset($_POST["joketext"]) && isset($_POST["jokeclou"]))
                    {
                        $query = "INSERT INTO dbo.joke VALUES ('" . $_POST["joketext"] . "','" . $_POST["jokeclou"] . "','" .  $date . "')";
                        echo "<h3>Grap toegevoegd!</h3><br>";
                        echo "Joketext: " . $_POST["joketext"] . "<br> Jokeclou: " . $_POST["jokeclou"];
                    }
                    executeQueryViaExec($query);
                    echo "<br><br>" . $query;
                }
                ?>
            </form>
        </main>
    </body>
</html>
