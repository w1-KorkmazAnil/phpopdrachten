<?php
include '../../Includes/header.php';
include '../../Includes/sidemenu.php';
include '../../Includes/footer.php';
?>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <table>
                <tr>
                    <td>Bedrijfsnaam:</td>
                    <td><?php echo $_POST['companyname']; ?></td>
                </tr>
                <tr>
                    <td>Voornaam:</td>
                    <td><?php echo $_POST['firstname']; ?></td>
                </tr>
                <tr>
                    <td>Achternaam:</td>
                    <td><?php echo $_POST['lastname']; ?></td>
                </tr>
                <tr>
                    <td>Telefoon:</td>
                    <td><?php echo $_POST['phonenumber']; ?></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><?php echo $_POST['email']; ?></td>
                </tr>
                <tr>
                    <td>Bericht:</td>
                    <td><?php echo $_POST['message'];?></td>
                </tr>
            </table>
        </main>
    </body>
</html>
