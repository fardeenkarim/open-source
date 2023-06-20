<?php 
require_once('function.php');
require_once('config.php');
$id = $_GET['bHuRoIoTwWeMdPqZqEjJqZtCiJlZcVyGpQrXrTdZvPnOmIlZeOpLoSiLzZsBjHoTxBtVnAuCnAdVkNfDiTrAvFdJsCjIhGtHbIvH'];
$query = "SELECT * FROM teachers WHERE id = $id";
$data = mysqli_query($con,$query);
$single_data = mysqli_fetch_assoc($data);
connect_header()
?>
<div class="conatiner-fluid content-inner py-0 custom_body">
  <!-- FOR FUTURE CODE START -->
  <div class="bd-example">
    <form action="update.php" method="post">
      <h2 class="add_teacher">Update Teacher</h2>
      <div class="mb-3">
        <label for="" class="form-label">First Name</label>
        <input type="text" value="<?php echo $single_data['first_name'] ?>" name="first_name" class="form-control" id="first_name" required>
        <input type="hidden" value="<?php echo $single_data['id'] ?>" name="id" class="form-control" id="fid" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Last Name</label>
        <input type="text" value="<?php echo $single_data['last_name'] ?>" name="last_name" class="form-control" id="last_name" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Job Title</label>
        <input type="text" value="<?php echo $single_data['job_title'] ?>" name="job_title" class="form-control" id="job_title" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">School Name</label>
        <input type="text" value="<?php echo $single_data['school_name'] ?>" name="school_name" class="form-control" id="school_name" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Website</label>
        <input type="text" value="<?php echo $single_data['website'] ?>" name="website" class="form-control" id="website" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Email Address</label>
        <input type="email" value="<?php echo $single_data['email'] ?>" name="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">LinkedIn Profile Link</label>
        <input type="text" value="<?php echo $single_data['linkedin'] ?>" name="linkedin" class="form-control" id="linkedin" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Phone</label>
        <input type="text" value="<?php echo $single_data['phone'] ?>" name="phone" class="form-control" id="phone" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">City</label>
        <input type="text" value="<?php echo $single_data['city'] ?>" name="city" class="form-control" id="city" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">State</label>
        <input type="text" value="<?php echo $single_data['state'] ?>" name="state" class="form-control" id="state" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Country</label>
        <input type="text" value="<?php echo $single_data['country'] ?>" name="country" class="form-control" id="country" required>
      </div>
      <button type="submit" class="btn btn-primary">Update To Database</button>
    </form>
  </div>
  <!-- FOR FUTURE CODE END -->
</div>
<?php
connect_footer()
?>