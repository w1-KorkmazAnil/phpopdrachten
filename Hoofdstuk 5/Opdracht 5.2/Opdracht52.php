<?php
include '../../Includes/header.php';
include '../../Includes/sidemenu.php';
include '../../Includes/footer.php';
?>)
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <h2>Uitschrijfformulier KW1C</h2>
            <hr>
            <form action="Uitschrijving.php" method="get">
                <table>
                    <tr>
                        <td>
                            <label for="firstAndLastname">Voor en achternaam</label>
                        </td>
                        <td>
                            <input type="text" id="firstAndLastname" name="firstAndLastname">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="studentNumber">Studentennummer</label>
                        </td>
                        <td>
                            <input type="number" id="studentNumber" name="studentNumber">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dateOfDeregistration">Datum van uitschrijving</label>
                        </td>
                        <td>
                            <input type="date" id="dateOfDeregistration" name="dateOfDeregistration">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Reden van uitschrijving
                        </td>
                        <td>
                            <select name="reden">
                                <option value="NietLeuk">Ik vind het niet zo leuk.</option>
                                <option value="teMoeilijk">Ik vind het te moeilijk.</option>
                                <option value="geschorst">Ik ben geschorst.</option>
                                <option value="andereSchool">Ik ga naar een andere school.</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Leerjaar
                        </td>
                        <td>
                            <input type="radio" name="leerjaar" value="1e leerjaar">
                            <label for="leerjaar1">1e leerjaar</label><br>
                            <input type="radio" name="leerjaar" value="2e leerjaar">
                            <label for="leerjaar2">2e leerjaar</label><br>
                            <input type="radio"name="leerjaar" value="3e leerjaar">
                            <label for="leerjaar3">3e leerjaar</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" name="aanmelden">
                            <label for="aanmelden">Ik wil me aanmelden bij de succesklas</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" name="verwijder">
                            <label for="verwijder">Verwijder mijn gegevens uit het syteem</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <br>
                            <label for="redenUitschrijving">Geef hieronder de reden van je uitschrijving op.</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="redenUitschrijving" name="redenUitschrijving">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                            <input type="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </main>
    </body>
</html>