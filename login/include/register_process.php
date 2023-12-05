<!-- register_process.php -->
<?php
include('dbcon.php');
session_start();

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $new_email = $_POST['new_email'];
    $new_password = $_POST['new_password'];

    // Add validation for input data as needed

    // Check if the email already exists in the database
    $check_query = "SELECT * FROM `users` WHERE `email`='$new_email'";
    $check_result = mysqli_query($conn, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        header('location:../index.php?message=Email already exists. Please choose a different one.');
    } 
    else {
        // Insert the new user into the database
        $insert_query = "INSERT INTO `users` (`user_name`, `email`, `password`, `type`) VALUES ('$name', '$new_email', '$new_password', 'user')";
        $insert_result = mysqli_query($conn, $insert_query);

        if($insert_result){
            header('location:../index.php?message=Registration successful. Please login.');
        } else {
            header('location:../index.php?message=Registration failed. Please try again.');
        }
    }
}
?>
