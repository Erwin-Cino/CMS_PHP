
<?php 

if (isset($_POST['create_post'])) {
    
    echo $_POST['create_post'];
    
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
  
<div class="form-group"></div>
  <input type="submit" class="btn btn-primary" name="create_post" value="Publish">
</div>
</form>