<?php
//weather34 weatherstation create the database then create the tables 
require_once(__DIR__.'/load_settings.php');
$servername = $db_host;
$username = $db_user;
$password = $db_pass;
$dbname = "weatherstation";
// Create connection to database access
$conn = new mysqli($servername, $username, $password);
// Check connection to database access
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create weatherstation database 
$sql = "CREATE DATABASE weatherstation";
if ($conn->query($sql) === TRUE) {
	
    echo " weather34 Database weatherstation created successfully";
} else {
    echo "weather34 Error creating database: " . $conn->error;
}

$sql1 = mysql_query("GRANT ALL ON" .$dbname. "* TO ".$username);
if ($conn->query($sql1) === TRUE) {
	
    echo " weather34 Database weatherstation granted privileges successfully";
} else {
    echo "weather34 Error granting  privileges to database: " . $conn->error;
}

$conn->close();


// Create connection  to database access
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection to database access
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// weatherstation sql to create table
$sql = "CREATE TABLE `weatherstation` (
  `ID` int(11) NOT NULL,
  `time` text NOT NULL,
  `outsideTemp` decimal(10,1) NOT NULL,
  `barometer` decimal(10,2) NOT NULL,
  `raintoday` decimal(10,2) NOT NULL,
  `UV` decimal(10,0) NOT NULL,
  `windgustmph` decimal(10,1) NOT NULL,
  `windSpeed` decimal(10,1) NOT NULL,
  `radiation` decimal(10,2) NOT NULL,
  `dewpoint` decimal(10,2) NOT NULL,
  `rainrate` decimal(10,2) NOT NULL,
  `direction` decimal(10,2) NOT NULL,
  `date` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lightning` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

";

if ($conn->query($sql) === TRUE) {
    echo "weather34 Table for weatherstation created successfully";
} else {
    echo "weather34 Error creating table: " . $conn->error;
}

$conn->close();
?>
