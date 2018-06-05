
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            
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
                                    <td><a href='posts.php?delete={$post_id}'>Delete</a></td>
                                     <td><a href='posts.php?delete={$post_id}'>Edit</a></td>
                                </tr>";
                        }
                        
                        ?>
                        
                        
                        <?php 
                                
                            if(isset($_GET['delete'])) {
                                
                                $post_delete_id = $_GET['delete'];                          
                            
                                
                                $query = "DELETE from posts WHERE post_id = {$post_delete_id}";
                                
                                $delete_query = mysqli_query($con,$query);
                                
                                check_query($delete_post);
                                echo "Post {$post_title} Successfully deleted";

                                

                            }        
                                
                                
                        ?>
                        
                        </tbody>
                   </table>