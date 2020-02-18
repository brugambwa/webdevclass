<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'dbconnect.php';

//Prep for DB Connection:
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "";

function RegisterClientByPDO($fullname, $emailaddress, $username, $password) {
    $conn = PDODBConnect($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);
    $hashedpassword = HashWithMD5($password);
    $query = "INSERT INTO cp_users (full_name, email_address, username, password) "
            . "VALUES(?, ?, ?, ?)";
    $statement = $conn->prepare($query);
    $statement->bind($fullname, $emailaddress, $username, $hashedpassword);
    $result = $statement->execute();

    if ($result) {
        echo "Successfully Inserted";
    } else {
        echo "Could not insert record! ";
    }
}

function RegisterClient($fullname, $emailaddress, $username, $password) {
    $conn = DBConnect($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);
    $hashedpassword = HashWithMD5($password);

    $query = "INSERT INTO cp_users (full_name, email_address, username, password) "
            . "VALUES('$fullname', '$emailaddress', '$username', '$hashedpassword')";

    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Successfully Inserted";
    } else {
        echo "Could not insert record! " . mysqli_error($GLOBALS['dbconn']);
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
