<!DOCTYPE html>
<html lang="en">

<?php include "includes/admin_header.php" ?>
<?php include "includes/admin_navigation.php" ?>
<?php include "includes/functions.php" ?>

<?php ob_start(); ?>
   
    <div id="wrapper">
   

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome Admin
                            <small>Author</small>
                        </h1>
                        
                        <?php 
                        
                        $query = "SELECT * from posts";
                        $select_posts = mysqli_query($con,$query);
                        
                        while ($row = mysqli_fetch_assoc($select_posts)) {
                            row["cat_id"] = $cat_id;
                        }
                        
                        ?>
                        
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
  
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td>Erwin</td>
                                <td>Bootstrap</td>
                                <td>Test</td>
                                <td>Draft</td>
                                <td>This image</td>
                                <td>Dev</td>
                                <td>08/5/2018</td>
                            </tr>
                        </tbody>
                   </table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        
    </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>