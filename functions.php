<?php
require_once 'connection.php';

//function to get data form the data base

function get_all_data()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM posts");

    if (mysqli_num_rows($result) > 0) {

        echo '<div class="col-12 pt-5><h1>All Posts</h1></div>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                <img src="..." alt="card image cap" class="card-img-top">

                <div class = "card-body">
                
                
                </div>
                </div>
            </div>
            ';
        }
    }
}
