<?php
require_once 'connection.php';

//function to get data form the data base

function get_all_data() {
    global $conn;
    $result = mysqli_query($conn ,"SELECT * FROM posts");

    if(mysqli_num_rows($result) > 0) {
        
    }
}