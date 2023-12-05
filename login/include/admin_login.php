<!-- admin_login.php -->
<?php include('include/header.php'); ?>

<form class="form" action="include/admin_login_process.php" method="post">
    <!-- Add fields for admin email and password here -->
    <div class="form-group">
        <label for="admin_email">Admin Email</label>
        <input type="email" name="admin_email" class="form-control">
    </div>
    <!-- Add other fields as needed -->

    <div class="form-group">
        <input type="submit" name="admin_login" value="Login" class="btn btn-success">
    </div>
</form>

<?php include('include/footer.php'); ?>
