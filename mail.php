<?php
require_once('function.php');
connect_header()
?>
<div class="conatiner-fluid content-inner py-0 custom_body">
  <!-- FOR FUTURE CODE START -->
  <div class="bd-example">
    <form action="handler.php" method="post">
      <h2 class="add_teacher">Send Mail</h2>
      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Subject</label>
        <input type="text" name="subject" class="form-control" id="subject" required>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Message</label>
        <input type="text" name="message" class="form-control" id="message" required>
      </div>
      <button type="submit" class="btn btn-primary">Send Mail</button>
    </form>
  </div>
  <!-- FOR FUTURE CODE END -->
</div>
<?php
connect_footer()
?>