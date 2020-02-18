<?php
require_once 'dbconnect.php';

//Prep for DB Connection:
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "class_webdev_project";

/*
 * This function Uses PDO driver to insert data into the DB.
 */

function RegisterClientByPDO($fullname, $emailaddress, $username, $password) {
    $conn = PDODBConnect($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);
    $hashedpassword = HashWithMD5($password);
    $query = "INSERT INTO cp_users (full_name, email_address, username, password) "
            . "VALUES(?, ?, ?, ?)";
    $statement = $conn->prepare($query);
    $result = $statement->execute([$fullname, $emailaddress, $username, $hashedpassword]);

    if ($result) {
        echo "Successfully Inserted";
    } else {
        echo "Could not insert record!";
    }
}

/*
 * This function Uses Standard MYSQLi driver to insert data into the DB.
 */

function RegisterClient($fullname, $emailaddress, $username, $password) {
    $conn = DBConnect($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);
    $hashedpassword = HashWithMD5($password);

    $query = "INSERT INTO cp_users (full_name, email_address, username, password) "
            . "VALUES('$fullname', '$emailaddress', '$username', '$hashedpassword')";

    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Successfully Inserted";
    } else {
        echo "Could not insert record! " . mysqli_error($conn);
    }
}

function HashWithMD5($text) {
    $hashedpassword = MD5($text);
    return $hashedpassword;
}

function HashWithMD5AndSalt($text, $salt) {
    $hashedpassword = MD5($text . $salt);
    return $hashedpassword;
}

function HashWithSHA256() {
    
}
