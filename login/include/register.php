<!-- register.php -->
<?php include('include/header.php'); ?>

<form class="form" action="include/register_process.php" method="post">
    <!-- Add fields for email, password, and name here -->
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <!-- Add other fields as needed -->

    <div class="form-group">
        <input type="submit" name="register" value="Register" class="btn btn-primary">
    </div>
</form>

<?php include('include/footer.php'); ?>