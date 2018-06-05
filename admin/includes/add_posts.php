
<?php 

if (isset($_POST['create_post'])) {
    
     $post_title = $_POST['title'];
     $post_author = $_POST['author'];
     $post_status = $_POST['post_status'];
     $post_category = $_POST['category'];
     $post_tags = $_POST['post_tags'];
     $post_image = $_FILES['image']['name'];
     $post_image_temp = $_FILES['image']['tmp_name'];
     $post_content = $_POST['post_content'];
     $post_date = date('d-m-y');
     $post_comment_count = 4;
    
    
    move_uploaded_file($post_image_temp, "../images/$post_image");
    
    
    
}



?>
 
 
 
 <form action="" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" name="title" >
  </div>
  
  <div class="form-group">
    <label for="post_category">Post Category</label>
    <input type="text" class="form-control" name="category">
  </div>
  
  <div class="form-group">
    <label for="author">Post Author</label>
    <input type="text" class="form-control" name="author">
  </div>
  
  <div class="form-group">
    <label for="post_status">Post Status</label>
    <input type="text" class="form-control" name="post_status">
  </div>
  
  <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input type="text" class="form-control" name="post_tags">
  </div>
  
  <div class="form-group">
    <label for="post_image">Post Image</label>
    <input type="file" name="image">
  </div>
  
  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea class="form-control" name="post_content" id="" cols="30" row="10"></textarea>
  </div>
 
  </div>
  
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="create_post" value="Publish">
</div>
</form>