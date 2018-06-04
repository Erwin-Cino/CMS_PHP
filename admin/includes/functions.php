<?php 


function insert_categories() {
    
    global $con;

    if(isset($_POST['submit'])) {

        $cat_title = $_POST['cat_title'];

        if($cat_title== "" || empty($cat_title)) {

            echo "this field should not be empty";
        } else {

            $query = "INSERT INTO categories(cat_title) ";
            $query .= "VALUE('{$cat_title}') ";

            $create_category_query = mysqli_query($con,$query);
            
            echo "category '{$cat_title}' added";

            if (!$create_category_query) {
                die('query failed' . mysqli_query($con));
            }

        }

    }


}


function table_categories() {
    
    global $con;
    
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
}


function delete_query() {
     if(isset($_GET['delete'])) {
         
         
         global $con;
                                    
            $get_cat_id = $_GET['delete'];

                $query = "DELETE FROM categories WHERE cat_id = {$get_cat_id}";
                $delete_cat_id = mysqli_query($con,$query);
                header("Location: categories.php"); 
         
                if($delete_cat_id) {
                    echo "Category deleted";
                }
         
         
         

     } 
}

?>