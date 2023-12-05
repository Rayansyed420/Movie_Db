<?php include('dbcon.php'); ?>
<?php session_start(); ?>
<?php
if(isset($_POST['login'])){
    $username=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    //echo $username;
}
$query = "SELECT * FROM `users` WHERE `user_name`='$username' AND `email`='$email' AND `password`='$password'";
$result= mysqli_query($conn,$query);

if(!$result){
    die("query failed".mysqli_error());
}
else{
    $row=mysqli_num_rows($result);
    //echo $row;
    if($row==1){
        $_SESSION['uname']=$username;
        header('location:../home.php');
    }
    else{
        header('location:../index.php?message=sorry your username or email or password is invalid');
    }

}
?>


