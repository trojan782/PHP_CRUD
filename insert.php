<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Crud</title>
    <link rel="stylesheet" href="bootstrap-5.0.0-alpha1-dist/css/bootstrap.min.css">
    <!--Bootstrap css file -->
    <link rel="stylesheet" href="bootstrap-5.0.0-alpha1-dist/css/bootstrap.css">
    <!--Bootstrap css file-->
    <link rel="stylesheet" href="./style.css">
    <!--local stylesheet -->
</head>

<body>
    <!-- Your code goes in here -->
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h2>Insert Data</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                    <small class="form-text text-muted">Make sure your title is unique</small>
                </div>

                <div class="form-group">
                <label for="content"></label>
                <textarea class = "form-control" name="content" id="content" cols="50" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="./script.js"></script>
    <!--local script file-->
    <script src="bootstrap-5.0.0-alpha1-dist/js/bootstrap.min.js"></script>
    <!--Bootstrap js file -->
    <script src="bootstrap-5.0.0-alpha1-dist/js/bootstrap.js"></script>
    <!--Bootstrap js file -->
    </div>
</body>

</html>