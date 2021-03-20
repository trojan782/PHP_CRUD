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
                <h4><a class="text-secondary" href="single.php?id='.$row['id'].'">'.$row['title'].'</a></h4>

                <p class="card-text">
                '.htmlspecialchars_decode(substr($row['content'], 0, 100)) . '...
                </p>
                

                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href = "single.php?id=' .$row['id'].'" class="btn-sm btn-outline-primary" role="button" aria-pressed="true">View</a>

                <a href="update.php?id='.$row['id'].'" class="btn btn sm btn-outline-secondary" role="button aria-pressed="true">Edit</a>
                </div>
                
                <small class="text-muted">9 mins</small>
                </div>

                </div>
                </div>
            </div>
            ';
        }
    }
}
