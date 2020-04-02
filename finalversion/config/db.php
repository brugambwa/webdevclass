<?php

class DB {

    function __construct() {
        $dbhost = 'localhost';
        $dbuname = 'root';
        $dbpass = '';
        $dbname = 'class_webdev_project';

        $this->_dbconn = mysqli_connect($dbhost, $dbuname, $dbpass, $dbname);

        if (!$this->_dbconn) {
            die("Connection to DB could not be made! " . mysqli_connect_error());
        }
    }

}
