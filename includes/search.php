
               <?php
     
                if(isset($_POST['submit'])) {
                    
                $search = $_POST['search'];
                // echo $search;
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
                $result = mysqli_query($con,$query);
                    
                    if(!$result) {
                        die("query failed" . mysqli_error($con));
                    }
                    
                $count = mysqli_num_rows($result);
                
                }
                
                if($count == 0) {
                    echo "<h1>NO RESULT</h1>";
                } else {
                     $query = "SELECT * from posts";
                           
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $post_title = $row['post_title'];  
                        $post_author = $row['post_author']; 
                        $post_date = $row['post_date']; 
                        $post_content = $row['post_content']; 
                        $post_image = $row['post_image']; 
                        $post_tags = $row['post_tags'];  

                        ?>   
                        <h1 class='page-header'>
                                Page Heading
                                <small>Secondary Text</small>
                            </h1>

                            <!-- First Blog Post -->
                            <h2>
                                <a href='#'><?php echo $post_title ?></a>
                            </h2>
                            <p class='lead'>
                                by <a href='index.php'><?php echo $post_author ?></a>
                            </p>
                            <p><span class='glyphicon glyphicon-time'></span><?php echo $post_date ?></p>
                            <hr>
                            <img class='img-responsive' src='images/<?php echo $post_image ?>' alt=''>
                            <hr>
                            <p><?php echo $post_content ?></p>
                            <a class='btn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>
                            <hr>
          
                        
                      
              <?php       
                    }
                
                ?>
                  </div>
              <?php  } ?>
                
             