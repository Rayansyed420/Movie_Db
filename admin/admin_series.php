<?php include("admin_header.php"); ?>
<?php include("navbar_admin.php"); ?>
<?php include("../db_connect.php"); ?>
<?php include("../modal.php"); ?>

<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary" type="button" 
    data-bs-toggle="modal" data-bs-target="#exampleModal">Insert Data</button>
    </div>

    
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>Title </th>
                <th>Year Released </th>
                <th>Duration </th>
                <th>Seasons </th>
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
                        <td></td>
                        <td></td>
                        <td><a href="#" class="btn btn-success">Button</td>
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