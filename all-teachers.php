<?php
require_once('function.php');
require_once('config.php');
connect_header()
?>
<div class="conatiner-fluid content-inner py-0 custom_body">
  <!-- FOR FUTURE CODE START -->
  <div class="bd-example table-responsive">
    <table id="myTable" class="table table-sm table-bordered custom_table display">
      <thead>
        <tr>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Job Title</th>
          <th scope="col">School Name</th>
          <th scope="col">Country</th>
          <th scope="col">Manage</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = 'SELECT * FROM teachers WHERE status = 1';
        $data = mysqli_query($con, $query);
        ?>
        <?php
        foreach ($data as $single_data) {
        ?>
          <tr>
            <td><?php echo $single_data['first_name'] ?></td>
            <td><?php echo $single_data['last_name'] ?></td>
            <td><?php echo $single_data['job_title'] ?></td>
            <td><?php echo $single_data['school_name'] ?></td>
            <td><?php echo $single_data['country'] ?></td>
            <td><a href="single-teacher.php?zMmLyFgAqHpAfQoLgXuHqYxNpYeJiPhDiZzTyToUxCwAgNkYoXpKbOaExCbLhNqLoYvJvUeSfQkYjWbMzNrKeKqAoYuFfPwPqOqC= <?php echo $single_data['id'] ?>">View |</a>
            <a href="edit.php?bHuRoIoTwWeMdPqZqEjJqZtCiJlZcVyGpQrXrTdZvPnOmIlZeOpLoSiLzZsBjHoTxBtVnAuCnAdVkNfDiTrAvFdJsCjIhGtHbIvH=<?php echo $single_data['id'] ?>">Edit |</a>
            <a href="soft-delete.php?eNjBtTjRgSwPdHxVtNmPtWyPtWxVuKwKwBgZvQjEyAxXuBlXrRpMcJiTrSoNdNeBnXdHxMmDnWxUxXfStSiHjSyRxZsOuRhFbXgU=<?php echo $single_data['id'] ?>">Delete</a>
          </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- FOR FUTURE CODE END -->
</div>
<?php
connect_footer()
?>