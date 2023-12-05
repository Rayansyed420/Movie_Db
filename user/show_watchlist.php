<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?>  
<?php include("navber_user.php"); ?>


    <div class="container">
    <h2>Watch list</h2><br>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>Title </th>
                <th>Year released </th>
                <th>Date and Time </th>
                <th> </th>
            </tr>
        </thead>

        <tbody>
            <?php
                $user_id = 2;
                

                $view_query = "SELECT content.title, content.year_released, watch_list.timestamp, added_to.list_id
                FROM Content INNER JOIN watch_list ON Content.content_id = watch_list.content_id
                INNER JOIN added_to ON watch_list.list_id = added_to.list_id
                WHERE watch_list.user_id = $user_id";

               
                $result = mysqli_query($conn, $view_query);

                if (!$result){
                    die("Query Failed".mysqli_error());
                }
                else{
                    while($row=mysqli_fetch_assoc($result)){
                        ?>

                    <tr>                        
                        <td> <?php echo $row['title']; ?> </td>
                        <td> <?php echo($row['year_released']) ?> </td>
                        <td> <?php echo($row['timestamp']) ?> </td>
                        <td><a href="" class="btn btn-danger">Delete</td>
                    </tr>

                <?php
                    }
                }

            ?>


        </table>
        </div>


<?php include("../footer.php"); ?>