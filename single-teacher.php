<?php 
require_once('function.php');
require_once('config.php');
connect_header();
$id = $_GET['zMmLyFgAqHpAfQoLgXuHqYxNpYeJiPhDiZzTyToUxCwAgNkYoXpKbOaExCbLhNqLoYvJvUeSfQkYjWbMzNrKeKqAoYuFfPwPqOqC'];
$query = "SELECT * FROM teachers WHERE id = $id";
$data = mysqli_query($con,$query);
$single_data = mysqli_fetch_assoc($data);
?>
<div class="conatiner-fluid content-inner py-0 custom_body">
  <!-- FOR FUTURE CODE START -->
               <div id="profile-profile" class="tab-pane fade active show" role="tabpanel">
                  <div class="card">
                     <div class="card-header">
                        <div class="header-title">
                           <h4 class="card-title">Profile</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="text-center">
                           <div class="user-profile">
                              <img src="assets/images/avatars/01.png" alt="profile-img" class="rounded-pill avatar-130 img-fluid">
                           </div>
                           <div class="mt-3">
                              <h3 class="d-inline-block"><?php echo $single_data['first_name'] ?> <?php echo $single_data['last_name'] ?></h3>
                              <p class="mb-0"><?php echo $single_data['job_title'] ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header">
                        <div class="header-title">
                           <h4 class="card-title">About The Teacher</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="mt-2">
                        <h6 class="mb-1">First Name:</h6>
                        <p><?php echo $single_data['first_name'] ?></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">Last Name:</h6>
                        <p><?php echo $single_data['last_name'] ?></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">Job Title:</h6>
                        <p><?php echo $single_data['job_title'] ?></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">School Name:</h6>
                        <p><?php echo $single_data['school_name'] ?></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">website:</h6>
                        <p><?php echo $single_data['website'] ?></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">Email Address:</h6>
                        <p><?php echo $single_data['email'] ?></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">Linkedin Profile Link:</h6>
                        <p><?php echo $single_data['linkedin'] ?></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">Phone Number:</h6>
                        <p><?php echo $single_data['phone'] ?></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">City:</h6>
                        <p><?php echo $single_data['city'] ?></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">State:</h6>
                        <p><?php echo $single_data['state'] ?></p>
                        </div>
                        <div class="mt-2">
                        <h6 class="mb-1">Country:</h6>
                        <p><?php echo $single_data['country'] ?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
  <!-- FOR FUTURE CODE END -->
</div>
<?php
connect_footer()
?>