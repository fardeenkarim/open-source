<?php
require_once('function.php');
connect_header()
?>
<div class="conatiner-fluid content-inner py-0 custom_body">
  <!-- FOR FUTURE CODE START -->
  <div class="bd-example">
    <form action="image.php" method="post" enctype="multipart/form-data">
      <h2 class="add_teacher">Add Image</h2>
      <div class="mb-3">
        <input type="file" name="img" class="form-control" id="img" required>
      </div>
      <button type="submit" class="btn btn-primary">Add To Database</button>
    </form>
  </div>
  <!-- FOR FUTURE CODE END -->
</div>
<?php
connect_footer()
?>