<?php

include 'db.php';

class App extends DB {

    function __construct() {
        parent::__construct();
    }

    function Login($uname, $pwd) {
        $hashedpassword = md5($pwd);
        $query = "SELECT * FROM cp_users WHERE username='" . $uname . "' AND password='" . $hashedpassword . "'";
        $result = mysqli_query($this->_dbconn, $query)or die(mysqli_errno());
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (!empty($row)) {
            $accessrights = $this->GetAccessLevels($row['user_level_id']);
            session_start();
            $_SESSION['full_name'] = $row['full_name'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['isloggedin'] = true;
            $_SESSION['userlvl'] = $row['user_level_id'];
            $_SESSION['access_rights'] = explode(',', $accessrights['access_rights']);

            header("Location: index.php");
        }
    }

    function CreateApp($postData, $userid) {
        $appdetails = array(
            'app_name' => $postData['app_name'],
            'ussd_code' => $postData['app_ussd_code'],
            'routing_url' => $postData['routing_url'],
            'request_format' => $postData['request_format'],
            'app_status' => $postData['app_status'],
            'owner' => $userid
        );
        $query = "INSERT INTO cp_apps (app_name, ussd_code, routing_url, request_format, app_status, owner) "
                . "VALUES('" . $appdetails['app_name'] . "', '" . $appdetails['ussd_code'] . "', '" . $appdetails['routing_url'] . ""
                . "', '" . $appdetails['request_format'] . "', '" . $appdetails['app_status'] . "', '" . $appdetails['owner'] . "')";
        $result = mysqli_query($this->_dbconn, $query) or die(mysqli_error($this->_dbconn));
        if ($result) {
            $flag = 1;
        } else {
            $flag = 0;
        }

        return $flag;
    }

    function GetApps($session) {
        //Super Admin (3) sees all apps, User(2) sees all apps, Admin(1) sees only their Apps
        if($session['userlvl'] == 1){
            $query = "SELECT * FROM cp_apps WHERE owner='".$session['user_id']."'";
        }else{
            $query = "SELECT * FROM cp_apps";
        }
        
        $result = mysqli_query($this->_dbconn, $query)or die(mysqli_errno());
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $row;
    }

    function GetAccessLevels($id) {
        $query = "SELECT * FROM cp_access_rights WHERE user_level_id='" . $id . "'";
        $result = mysqli_query($this->_dbconn, $query)or die(mysqli_errno());
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        return $row;
    }

}
