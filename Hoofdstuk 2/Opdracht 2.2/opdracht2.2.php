<?php
/**
 * User: Anil Korkmaz
 * Date: 13-2-2020
 * Time: 20:26
 * File: opdracht2.2.php
 */
?>

<!DOCTYPE html>

<html>
    <head>
        <link href="../css/style.css" type="text/css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="keywords" content="keyword 1, keyword 2">
        <meta name="description" content="opdracht 2.1">
        <title>
            Opdracht 2.2
        </title>
    </head>
    <body>
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

    <header>
        <h1><a href="../../index.php"><?php echo "Uitwerking van PHP-opdrachten"; ?></a></h1>
        </header>
        <aside>
            <h2>Menu</h2>
            <ul>
                <li>Hoofdstuk 2
                    <ul>
                        <li>
                            <a href="../Opdracht%202.1/opdracht2.1.php">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="opdracht2.2.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>Hoofdstuk 3
                    <ul>
                        <li>
                            <a href="Hoofdstuk%203">Opdracht 3.1</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk%203">Opdracht 3.2</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk%203">Opdracht 3.3</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>Hoofdstuk 4
                    <ul>
                        <li>
                            <a href="Hoofdstuk%204">Opdracht 4.1</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk%204">Opdracht 4.2</a>
                        </li>
                        <li>
                            <a href="Hoofdstuk%204">Opdracht 4.3</a>
                        </li>
                        <li>
                            <a href="hoofdstuk4/opdracht_4-4.php">Opdracht 4.4</a>
                        </li>
                    </ul>
                </li>
                <li>Hoofdstuk 5
                    <ul>
                        <li>
                            <a href="hoofdstuk5/opdracht_5-1.php">Opdracht 5.1</a>
                        </li>
                        <li>
                            <a href="hoofdstuk5/opdracht_5-2.php">Opdracht 5.2</a>
                        </li>
                        <li>
                            <a href="hoofdstuk5/opdracht_5-3.php">Opdracht 5.3</a>
                        </li>
                        <li>
                            <a href="hoofdstuk5/opdracht_5-4.php">Opdracht 5.4</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <h3>Taak 2</h3>
            <p>
                <?php
                    echo $text01 . $text11 . $text04 . $text05 . $text15 . $text02 . $text10;
                    echo $text12;
                    echo $text07 . $text10 . $text08 . $text15 . $text09;
                    echo $text12;
                    echo $text06 . $text05 . $text03 . $text13 . $text10;
                ?>
            </p>
            <h3>Taak 3</h3>
            <p>
                <?php
                    echo $text01 . $text11;
                    echo $text12;
                    echo $text08 . $text15 . " dat " . $text05 . "zo'n makkelijke taal " . $text13 . $text10;
                    echo $text12;
                    echo $text07 . $text10 . $text14 . $text09;
                ?>
            </p>
        </main>
    </body>
</html>

