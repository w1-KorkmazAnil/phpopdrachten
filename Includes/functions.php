<?php
date_default_timezone_set("Europe/Amsterdam");
$date = date("yy-m-d G:i:s.v");
function startConnection()
{
    global $pdo;
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
    }
    catch (PDOException $e)
    {
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        die();
    }
}
function executeQueryViaExec($sql)
{
    global $pdo;
    try
    {
        // Uitvoeren van de query via exec ()
        $pdo->exec($sql);
    }
    catch (PDOException $e)
    {
        echo 'Er is een probleem met uitvoeren van exec(): ' . $e->getMessage();
        exit();
    }
}
