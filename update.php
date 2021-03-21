<?php include('header.php') ?>
<div class="container">
    <div class="col pt-5">
        <h2>Update data</h2>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id= <?php echo $row['id']; ?>" method="POST">
            <div class="form-group">
                <label for="update_title">Title</label>
                <input type="text" name="update_title" class="form-control" id="update_title" placeholder="Title" value="<? echo $row['title'];?>" required>
                <small class="form-text text-muted">Make sure your title is unique</small>
            </div>

            <!-- for the content -->
            <div class="form-group">
                <label for="update_content">Content</label>
                <textarea name="update_content" id="update_content" cols="50" rows="4" class="form-control" value="ad" required><?php echo $row['content']; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>