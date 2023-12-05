<?php include('include/header.php'); ?>
        <?php
        if(isset($_GET['message'])){           
            echo "<h4>" .$_GET["message"]."</h4>";
        } 

        ?>

    <form class="form" action="include/login_process.php" method="post">
        <div class="form-group">
            <label for="uname">Username</label>
            <input type="text" name="uname" class="form-control">
        </div class="form-group">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="login" value="Login" class="btn btn-success">
            <a href="register.php" class="btn btn-primary">Register</a>
            <a href="admin_login.php" class="btn btn-warning">Admin Login</a>
        </div>      
    </form>

    <!-- Add the registration form after the login form 
    <form class="form" action="include/register_process.php" method="post">
        <div class="form-group">
            <label for="new_uname">New Username</label>
            <input type="text" name="new_uname" class="form-control">
        </div>
        <div class="form-group">
            <label for="new_email">New Email</label>
            <input type="email" name="new_email" class="form-control">
        </div>
        <div class="form-group">
            <label for="new_password">New Password</label>
            <input type="password" name="new_password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="register" value="Register" class="btn btn-primary">
        </div>
    </form>-->

    <!--<a href="register.php" class="btn btn-primary">Register</a>
    <a href="admin_login.php" class="btn btn-warning">Admin Login</a>-->
    


    <?php include('include/footer.php'); ?>