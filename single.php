<?php
require_once 'functions.php';
include('header.php');
$row = update_get();
?>

<div class="container">
    <div class="row">
        <div class="col-12 pt-5">
            <img src="https://via.placeholder.com/300x100" class="card-img-top" alt="">
            <h2 class="pt-5"><?php echo $row['title'] ?></h2>
            <p><?php echo htmlspecialchars_decode($row['content'])?></p>
        </div>
    </div>
</div>

<?php
include ('footer.php');
?>