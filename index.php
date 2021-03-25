<!-- Bootstrap 5 boiler plate (offline) made with 💛  by TrojanCodes😃-->
<!-- Make sure you have Bootstrap 5.0 unziped file in the project directory -->
<?php
// $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=products_crud','root', '');
// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// $host = "127.0.0.1";
// $username = "root";
// $dbname = 'products_crud';
// $password = '';

// try {
//     $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
//     $pdo = new PDO($dsn, $username, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Database Connected Successfully ✅";
// } catch (PDOException $error) {
//     echo "connection failed!: " . $error->getMessage();
// }
// $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
// $statement->execute();
// $products = $statement->fetchAll(PDO::FETCH_ASSOC);

// try {
//     $conn = new PDO("mysql:host=$serverna me;  dbname=products_crud", $username, $password);
//     $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "connected successfully";
// }
// catch(PDOException $e) {
//     echo "connection failed: ".$e->getMessage();
// }
?>
<?php include('header.php');
require_once 'functions.php';
?>

<div class="container">
    <div class="row">
        <?php get_all_data();?>
        <?php update_get(); ?>
        <?php delete_data(); ?>
    </div>
</div>
<?php include('footer.php') ?>
