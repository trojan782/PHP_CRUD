<?php include('header.php') ?>

    <!-- Your code goes in here -->
    <div class="container">
        <div class="row">
            <div class="col pt-5">
                <h2>Insert Data</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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

                <hr>

            </div>
        </div>
    </div>

<?php include('footer.php') ?>
  