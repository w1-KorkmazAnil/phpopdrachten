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
$year = 2021;
$age = 24;

while ($year >= 1998 && $age >= 0)
{
    $year--;
    $age--;
    if ($year == 2020 && $age == 23) {
        $task6 .= "<p>" . "In " . $year . " word ik " . $age . " jaar oud" . "<br>" . "</p>";
    } else if ($year == 1997 && $age == 0){
        $task6 .= "<p>" . "In " . $year . " ben ik geboren" . "<br>" . "</p>";
    }
    else
    {
        $task6 .= "<p>" . "In " . $year . " was ik " . $age . " jaar oud" . "<br>" . "</p>";
    }
}


