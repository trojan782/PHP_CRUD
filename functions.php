<?php
require_once 'connection.php';

//function to get data form the data base

function get_all_data()
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM posts");

    if(mysqli_num_rows($result) > 0) {

        echo '<h1>All Posts</h1>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a class="text-secondary" href="single.php?id='.$row['id'].'">'.$row['title'].'</a></h5>

    <p class="card-text">'.htmlspecialchars_decode(substr($row['content'], 0, 100)) . '...</p>
    
    <div class="btn-group">
    <a href = "single.php?id=' .$row['id'].'" class="btn btn-outline-primary" role="button" aria-pressed="true">View</a>

    <a href="update.php?id='.$row['id'].'" class="btn btn-sm btn-outline-secondary" role="button aria-pressed="true">Edit</a>

    </div>
    <small class="text-muted">9 mins</small>
  </div>
</div>

            ';
        }
    }
}

// to insert into the database
if(isset($_POST['title']) && isset($_POST['content'])) {

    //check title and content empty or not
    if(!empty($_POST['title']) && !empty($_POST['content'])) {
        $title = mysqli_real_escape_string($conn, htmlspecialchars($_POST['title']));

        $content = mysqli_real_escape_string($conn, htmlspecialchars($_POST['content']));

        //check if title already exists
        $check_content = mysqli_query($conn, "SELECT 'title' FROM posts WHERE title = '$title'");
        // $check_content = $conn->query($conn, "SELECT 'title' FROM posts WHERE content = '$title'");


        if(mysqli_num_rows($check_content) > 0) {
            echo "<h3>This title already exists - please try a different title name</h3>";
        }
        else {
            //insert data into database
            $insert_query = mysqli_query($conn, "INSERT INTO posts (title,content) VALUES('$title', '$content')");
           
            //Now check if data has been inserted
            if($insert_query) {
                echo "<script>alert('Data inserted');window.location.href = 'index.php'</script>";
                exit;
            } else {
                echo "<h3>Data was not inserted!</h3>";
            }
        }

    }else{
        echo "<h4>Please fill all fields</h4>";
    }
}

// function update_get() {
//     if(isset($_GET['id']) && is_numeric($_GET['id'])) {
//         global $conn;
//         $id = $_GET['id'];
//         $get_id = mysqli_query($conn, "SELECT * FROM posts WHERE id='$id'");

//         if(mysqli_num_rows($get_id) === 1) {
//             $row = mysqli_fetch_assoc($get_id);
//             return($row);
//         }
//         $get_title = $_POST['update_title'];
//         $get_content = $_POST['update_content'];
//         $update_query = mysqli_query($conn, "UPDATE posts SET title='$get_title, content='$get_content' WHERE id='$get_id");

//         if($update_query) {
//             echo 'Post updated!';
//         }
//     }
// }
