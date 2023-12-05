<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?>

<?php
    if(isset($_POST['add_rating'])){
        echo "yes pressed";
        
        $name = $_POST['f_name'];
        echo $name;

        $rating = isset($_POST['ratedIndex']) ? $_POST['ratedIndex'] : null;
        
        if (!is_null($rating)) {
            echo $rating;
        } else {
            echo "ratedIndex is not set.";
        }
    }
?>

<?php include("../footer.php"); ?>