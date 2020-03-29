<?php
include '../../Includes/header.php';
include '../../Includes/sidemenu.php';
include '../../Includes/footer.php';
?>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <h2>RESTARIA KEES KROKET</h2>
            <p>
                Visstraat 12<br>
                5211 DN 's-Hertogenbosch<br>
                073 613 6720<br>
                info@restariakeeskroket.nl
            </p>
            <form action="form_data.php" method="post">
                <label for="companyname">Bedrijfsnaam</label><br>
                <input type="text" id="companynamename" name="companyname"><br>

                <label for="firstname">Voornaam</label><br>
                <input type="text" id="firstname" name="firstname"><br>

                <label for="lastname">Lastname</label><br>
                <input type="text" id="lastname" name="lastname"><br>

                <label for="phonenumber">Telefoon</label><br>
                <input type="number" id="phonenumber" name="phonenumber"><br>

                <label for="email">E-mail</label><br>
                <input type="email" id="email" name="email"><br>

                <label for="message">Bericht</label><br>
                <input type="text" id="message" name="message"><br>
                <br>
                <input type="submit">
            </form>
        </main>
    </body>
</html>
