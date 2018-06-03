 <form action="" method="post">
                               <label>Edit Category</label>
                               
                                   <?php 
                               
                                    if(isset($_GET['edit'])) {
                                    $cat_id = $_GET['edit'];
                                        
                                        $query = "SELECT * from categories WHERE cat_id = {$cat_id}";
                                        $result_edit = mysqli_query($con,$query);

                                        if(!$result_edit) {
                                            die("query failed" . mysqli_error($con));
                                        }
                                            while ($row = mysqli_fetch_assoc($result_edit)) {
                                             $cat_title = $row['cat_title'];
                                             $cat_id = $row['cat_id'];    
                                        
                                            }
                                    ?>
                                    
                                    
                                <div class="form-group">
                                    <input value="<?php if(isset($cat_title)) {echo $cat_title;} ?>" class="form-control" type="text" name="cat_title">
                                </div> 
                               
                                  <?php  
                                    }
                                 ?>       
                                      
                                    
                                       

                                  
                                <?php // UPDATE QUERY 
                                    //will find all category id equating to the delete button using GET method and deletes them
                                if(isset($_POST['edit'])) {
                                    
                                    $update_cat_title = $_POST['cat_title'];
                                        
                                        $update_query = "UPDATE categories SET cat_title='{$update_cat_title}' WHERE cat_id = {$cat_id}";
                                        $update_cat_title = mysqli_query($con,$update_query);
                                        //header("Location: categories.php"); 
                                    
                                        if(!$update_cat_title) {
                                            die("query failed" . mysqli_error($con));
                                        }
                                        
                                        if($update_query) {
                                            echo "Category Edited!";
                                        }
                                }
                                    
                                    
                                ?>
                                   
                            
                               
                               
                               
                               

                                 <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="edit" value="Edit Category">
                                </div>
                            </form>