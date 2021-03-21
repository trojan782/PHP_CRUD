<?php
require_once 'connection.php';

//function to get data form the data base

function get_all_data()
{
    global $mysqli;
    $result = mysqli_query($mysqli, "SELECT * FROM posts");

    if (mysqli_num_rows($result) > 0) {

        echo '<h1>All Posts</h1>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="card" style="width: 18rem;">
  <img src="https://banner2.cleanpng.com/20180624/ygl/kisspng-php-computer-icons-logo-filename-extension-php-logo-5b3022cdbb7a50.1988404515298812937679.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" href="single.php?id='.$row['id'].'">'.$row['title'].'</h5>

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
// if(isset($_POST['title']) && isset($_POST['content'])) {

//     //check title and content empty or not
//     if(!empty($_POST['title']) && !empty($_POST['content'])) {
//         $title = mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['title']));

//         $content = mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['content']));

//         //check if title already exists
//         // $check_content = mysqli_query($mysqli, "SELECT 'title' FROM posts WHERE content = '$title'");
//         $check_content = $mysqli->query($mysqli, "SELECT 'title' FROM posts WHERE content = '$title'");


//         if(mysqli_num_rows($check_content) > 0) {
//             echo "<h3>This title already exists - please try a different title name</h3>";
//         }
//         else {
//             //insert data into database
//             $insert_query = $mysqli->query($mysqli, "INSERT INTO posts (title, content) VALUES('$title', '$content')");
//             if(isset($_POST['submit'])) {

//             }
//             //Now check if data has been inserted
//             if($insert_query) {
//                 echo "<script>alert('Data inserted');window.location.href = 'index.php'</script>";
//                 exit;
//             } else {
//                 echo "<h3>Data was not inserted!</h3>";
//             }
//         }

//     }else{
//         echo "<h4>Please fill all fields</h4>";
//     }
// }