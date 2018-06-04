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
                        
                        
                        <div class="col-xs-6">
                           
                           <?php 
    
                            insert_categories();
    
    
                           ?>
                           
                           
                           
                           
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Add Category</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                 <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
                            
                            
                            <?php 
                            
                            if(isset($_GET['edit'])) {
                                
                                $cat_id = $_GET['edit'];
                                include "includes/edit_categories.php";
                            }
                            
                            
                            ?>
                          
                        </div>
                           
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                        <th colspan="2" style="text-align:center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                <?php //FIND ALL CATEGORIES QUERY
                                    //find all categories using query and displays it on the table to the right
                                    
                                    table_categories();
                           
                                ?>
                                
                                <?php // DELETE QUERY 
                                    //will find all category id equating to the delete button using GET method and deletes them
                                    delete_query();
                                    
                                    
                                ?>
                                
                                
                                </tbody>
                            </table>
                            
                        </div>
                            
                            
                       
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>