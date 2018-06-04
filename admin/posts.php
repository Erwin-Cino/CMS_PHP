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
                        
                          <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Post ID</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                        
                        <?php 
                        
                        $query = "SELECT * from posts";
                        $select_posts = mysqli_query($con,$query);
                        
                        while ($row = mysqli_fetch_assoc($select_posts)) {
                           $post_cat_id = $row["post_category_id"];
                           $post_title = $row["post_title"];
                           $post_author = $row["post_author"];
                           $post_date = $row["post_date"];
                           $post_tags = $row["post_tags"];
                           $post_status = $row["post_status"];
                           $post_image = $row["post_image"];
                           $post_id = $row["post_id"];
                        
                            echo "<tr>
                                    <td>$post_id</td>
                                    <td>$post_cat_id</td>
                                    <td>$post_author</td>
                                    <td>$post_title</td>    
                                    <td>$post_status</td>
                                    <td><img height='60px' width='auto' src=../images/$post_image alt='image'></td>
                                    <td>$post_tags</td>
                                    <td>$post_date</td>
                                </tr>";
                        }
                        
                        ?>
                        
  
<!--
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
-->
                        </tbody>
                   </table>
                    
                    <?php  ?>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        
    </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>