<?php

    $dbhost = "localhost";
    $dbname = "employee";
    $dbuser = "root";
    $dbpass = "";

    function getConnection(){
        global $dbhost;
        global $dbname;
        global $dbpass;
        global $dbuser;

        return  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    }
?>