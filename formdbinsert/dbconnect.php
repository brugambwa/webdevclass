<?php

/*
 * Using the MySQL PDO Driver
 */

function PDODBConnect($dbhost, $dbuser, $dbpass, $dbname) {
    try {
        $pdoconn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        // set the PDO error mode to exception
        $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo "Connection to DB could not be made! " . $ex->getMessage();
    }

    return $pdoconn;
}

/*
 * Using the MySQL Driver
 */

function DBConnect($dbhost, $dbuser, $dbpass, $dbname) {
    $dbconn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$dbconn) {
        die("Connection to DB could not be made! " . mysqli_connect_error());
    }

    return $dbconn;
}
