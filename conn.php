<?php
// Connection variables
$dbhost	= "us-cdbr-iron-east-02.cleardb.net";	   // localhost or IP
$dbuser	= "b01543e2235627";		  // database username
$dbpass	= "c49cad73";		     // database password
$dbname	= "heroku_47ef9b9b19eab6e";    // database name

$con=@mysqli_connect($dbhost, $dbuser, $dbpass	, $dbname);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>