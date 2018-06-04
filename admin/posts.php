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
                    
                    if (isset($_GET['source'])) {
    
                    $source = $_GET['source'];

                    } else {
                        
                        $source = '';
                    }
                        
                    switch($source) {
                        
                        case 'addposts';
                        include "includes/add_posts.php";
                        break;
                            
                        case '34';
                        echo "Works";
                        break;
                            
                        case '34';
                        echo "Works";
                        break;
                            
                        case '34';
                        echo "Works";
                        break;
                            
                        default: 
                            
                        include "includes/view_all_posts.php";
                            
                        break;
                    }
                    
                        
                    ?>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        
    </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>