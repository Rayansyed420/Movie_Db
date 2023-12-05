<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?>  
<?php include("navber_user.php"); ?>

<div class="container">
    <h2>Series</h2><br>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>Title </th>
                <th>Year Released </th>
                <th>Seasons </th>
                <th>Genre </th>
                <th>Rating </th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
                
                $view_query = "SELECT * FROM content WHERE type='series'";                
                $result = mysqli_query($conn, $view_query);

                if (!$result){
                    die("Query Failed".mysqli_error());
                }
                else{
                    while($row=mysqli_fetch_assoc($result)){
                        ?>

                    <tr>
                        
                        <td><a href="details_page.php?id=<?php echo $row['content_id']; ?>" class="text-decoration-none"> <?php echo $row['title']; ?></a></td>
                        <td> <?php echo($row['year_released']) ?> </td>
                        <td> <?php echo($row['seasons']) ?> </td>
                        <td>
                            <?php 
                            $content_id = $row['content_id'];
                            $genre_query = "SELECT * FROM `genre` WHERE content_id = $content_id" ;
                            $result_genre = mysqli_query($conn, $genre_query);

                            while($row_genre=mysqli_fetch_assoc($result_genre)){
                                echo($row_genre['genre_name']);
                                echo(" ");
                            }
                            ?>
                        </td>
                        <td></td>
                        <td><a href="details_page.php?id=<?php echo $row['content_id']; ?>" class="btn btn-success">Details</td>
                    </tr>

                        <?php
                    }
                }

            ?>


        </table>

        
        <?php
            if(isset($_GET['message'])){
                echo "<h6>".$_GET['message']."</h6>";
            }
        ?>
        <?php
            if(isset($_GET['insert_msg'])){
                echo "<h6>".$_GET['insert_msg']."</h6>";
            }
        ?>
        <?php
            if(isset($_GET['update_msg'])){
                echo "<h6>".$_GET['update_msg']."</h6>";
            }
        ?>        

</div>
<?php include("../footer.php"); ?>