<?php
require_once('function.php');
connect_header()
?>
<div class="conatiner-fluid content-inner py-0 custom_body">
  <!-- FOR FUTURE CODE START -->
  <div class="bd-example">
    <form action="add.php" method="post" enctype="multipart/form-data">
      <h2 class="add_teacher">Add Teacher</h2>
      <div class="mb-3">
        <label for="" class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-control" id="first_name" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Last Name</label>
        <input type="text" name="last_name" class="form-control" id="last_name" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Job Title</label>
        <input type="text" name="job_title" class="form-control" id="job_title" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">School Name</label>
        <input type="text" name="school_name" class="form-control" id="school_name" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Website</label>
        <input type="text" name="website" class="form-control" id="website" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">LinkedIn Profile Link</label>
        <input type="text" name="linkedin" class="form-control" id="linkedin" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" id="phone" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">City</label>
        <input type="text" name="city" class="form-control" id="city" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">State</label>
        <input type="text" name="state" class="form-control" id="state" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Country</label>
        <input type="text" name="country" class="form-control" id="country" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Profile Picture</label>
        <input type="file" name="user_img" class="form-control" id="user_img" required>
      </div>
      <button type="submit" class="btn btn-primary">Add To Database</button>
    </form>
  </div>
  <!-- FOR FUTURE CODE END -->
</div>
<?php
connect_footer()
?>