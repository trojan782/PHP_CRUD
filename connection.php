<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'cms';

//create connection
// $conn = mysqli_connect($host, $user, $password, $dbname);

// //check connection
// if(!$conn) {
//     die("connection failed: " . mysqli_connect_error());
// }
//database connection
$mysqli = new mysqli($host, $user, $password, $dbname); 

//check connection
if(!$mysqli) {
    die("connection failed:" . mysqli_error($mysqli));
}