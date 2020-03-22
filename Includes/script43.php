<?php
$task2 = "Lancering in: ";
$counter = 19;

while ($counter >= 0)
{
    $task2 .= $counter. ",";
    $counter--;
}

$task3 = "Lancering in: ";

for ($teller = 19; $teller >= 0; $teller--)
{
    $task3 .= $teller . ",";
}

$task4 = "";
$count = 1;

while ($count <= 6)
{
    $task4 .= "<h" . $count .">" . "Dit is de " . $count . "e iteratie" . "</h" . $count .">";
    $count++;
}

$task5 = "";

for ($tel = 1; $tel <= 10; $tel++)
{
    $task5 .= "<table>" . "<tr><td> Dit is de " . $tel . "e iteratie</td></tr>" . "</table>";
}

$task6 = "";
$year = 2019;
$age = 22;
$LT = "In 2020 word ik 23 jaar oud.";

while ($year >= 1997 && $age >= 0)
{
    $task6 .= "<p>" . "In " . $year . " was ik " . $age . " jaar oud" . "<br>" . "</p>";
    $year--;
    $age--;
}

// Taak 6 en 7 snap ik niet hoe ik die tekst moet veranderen of een tekst moet bijvoegen.
// Taak 6 heb ik anders (niet de juiste manier) opgelost.