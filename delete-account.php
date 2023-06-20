<?php
require_once('function.php');
require_once('config.php');
connect_header()
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
                              <img src="assets/images/logo.png" alt="profile-img" class="rounded-pill avatar-130 img-fluid">
                           </div>
                           <div class="mt-3">
                              <h3 class="d-inline-block">Fardeen Karim</h3>
                              <p class="mb-0">Full Stack Developer</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header">
                        <div class="header-title">
                           <h2 class="card-title">Danger Zone</h2>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="mt-2">
                          <?php
                          $query = 'SELECT * FROM signup_users';
                          $data = mysqli_query($con, $query);
                          ?>
                          <?php
                          foreach ($data as $single_data) {
                          ?>
                          <h6 class="mb-1"><h4>Delete My Account</h4></h6>
                          <a onclick="return confirm('Are You sure?');" href="delete-account-pass.php?ad=<?php echo $single_data['id'] ?>">
                          <h6 class="delete_box" >Delete - This Action Will Not Reversible!</h6>
                          </a>
                          <?php
                          }
                          ?>
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