<!DOCTYPE html>
<html lang="en">

<?php include "includes/admin_header.php" ?>
<?php include "includes/admin_navigation.php" ?>

   
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
    
                            if(isset($_POST['submit'])) {
                                
                                $cat_title = $_POST['cat_title'];
                                
                                if($cat_title== "" || empty($cat_title)) {
                                    
                                    echo "this field should not be empty";
                                } else {
                                    
                                    $query = "INSERT INTO categories(cat_title) ";
                                    $query .= "VALUE('{$cat_title}') ";
                                    
                                    $create_category_query = mysqli_query($con,$query);
                                    
                                    if (!$create_category_query) {
                                        die('query failed' . mysqli_query($con));
                                    }
                                    
                                }
                                
                            }
    
    
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

                                $query = "SELECT * from categories";
                                $result = mysqli_query($con,$query);

                                        if(!$result) {
                                            die("query failed" . mysqli_error($con));
                                        }
                                        while ($row = mysqli_fetch_assoc($result)) {
                                         $cat_title = $row['cat_title'];
                                         $cat_id = $row['cat_id'];    
                    
                                            echo "<tr>
                                                    <td>{$cat_id}</td>
                                                    <td>{$cat_title}</td>
                                                    <td><a href='categories.php?delete={$cat_id}'>Delete</a></td>
                                                    <td><a href='categories.php?edit={$cat_id}'>Edit</a></td>
                                                 </tr>";      
                                    } 
                                ?>
                                
                                <?php // DELETE QUERY 
                                    //will find all category id equating to the delete button using GET method and deletes them
                                if(isset($_GET['delete'])) {
                                    
                                    $get_cat_id = $_GET['delete'];
                                        
                                        $query = "DELETE FROM categories WHERE cat_id = {$get_cat_id}";
                                        $delete_cat_id = mysqli_query($con,$query);
                                        header("Location: categories.php"); 
                                }
                                    
                                    
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