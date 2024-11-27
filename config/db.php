<?php

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'pemweb-db';

// Establishing connection to the MySQL database
$db_connect = mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

// Checking if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
