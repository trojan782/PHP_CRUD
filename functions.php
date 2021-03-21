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
            <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" href="single.php?id='.$row['id'].'">'.$row['title'].'</h5>

    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    
    <div class="btn-group">
    <a href = "single.php?id=' .$row['id'].'" class="btn-sm btn-outline-primary" role="button" aria-pressed="true">View</a>

    <a href="update.php?id='.$row['id'].'" class="btn btn-sm btn-outline-secondary" role="button aria-pressed="true">Edit</a>

    </div>
    <small class="text-muted">9 mins</small>
  </div>
</div>

            ';
        }
    }
}
