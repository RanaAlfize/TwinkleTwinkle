<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$mysql_database = 'twinkle';
$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $mysql_database);
if(! $mysqli ) {
    die('Could not connect: ' . mysql_error());
}
?>


