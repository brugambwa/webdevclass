<?php
include('config/db.php');
if(isset($_POST['user_name']) && isset($_POST['password'])){
    Login($dbconn, $_POST['user_name'], $_POST['password']);
}

function Login($dbconn, $uname, $pwd){
    $hashedpassword = md5($pwd);
    $query = "SELECT * FROM cp_users WHERE username='".$uname."' AND password='".$hashedpassword."'";
    $result = mysqli_query($dbconn, $query)or die(mysqli_errno());
    $row = mysqli_fetch_array( $result );
    print_r($row);
}
