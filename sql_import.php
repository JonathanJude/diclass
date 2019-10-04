<?php

//connection variables
$host = 'a5s42n4idx9husyc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306';
$user = 'i2nur0ym9o5hc94i';
$password = 'rzthcnliqigjkpdb';
$dbname = 'usqod01dmfdpbgq0';

//create mysql connection
$mysqli = new mysqli($host,$user,$password,$dbname);
if ($mysqli->connect_error) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

//create the database
if ( !$mysqli->query('CREATE DATABASE accounts') ) {
    printf("Errormessage: %s\n", $mysqli->error);
}

//create users table with all the fields
$mysqli->query('
CREATE TABLE `mini_class`.`class` 
(
`class_id` int(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `title` varchar(150) NOT NULL,
  `level` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed` int(5) NOT NULL DEFAULT '0',
  `class_thumbnail` varchar(200) NOT NULL,
  `category` varchar(255) NOT NULL  
);') or die($mysqli->error);

?>


