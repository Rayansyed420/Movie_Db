<!-- admin_login_process.php -->
<?php
include('dbcon.php');
session_start();

if(isset($_POST['admin_login'])){
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    // Add validation for input data as needed

    // Check if the admin credentials are valid
    $check_query = "SELECT * FROM `users` WHERE `email`='$admin_email' AND `password`='$admin_password' AND `type`='admin'";
    $check_result = mysqli_query($conn, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        header('location:../admin_page.php');
    } else {
        header('location:../index.php?message=Invalid admin credentials. Please try again.');
    }
}
?>
