<?php  
  include "dashboard/dashboard.php";
?>
<div class="container mt-5">
  <h1 class="text-center text-danger"><b>View Detail of User</b></h1>
  <hr>
  <div class="row">

  <?php
  if (isset($data['detail'])) { 
    foreach ($data['detail'] as $row) {
  ?>
     
      <div class="col-md-4"></div>
      <table class="table table-border">
        <tr>
          <th class="header-table">ID</th>
          <td class="content"><?php echo $row['user_id']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Fullname</th>
          <td class="content"><?php echo $row['Username']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Gender</th>
          <td class="content"><?php echo $row['gender'];?></td>
        </tr>
        <tr>
          <th class="header-table">Email</th>
          <td class="content"><?php echo $row['email']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Title</th>
          <td class="content"><?php echo $row['title']; ?></td>
        </tr>
        <tr>
          <th class="header-table">StartDate</th>
          <td class="content"><?php echo $row['startdate']; ?></td>
        </tr>
        <tr>
          <th class="header-table">EndDate</th>
          <td class="content"><?php echo $row['enddate']; ?></td>
        </tr>
      <?php
          }
        }
      ?>
      </table>
      <a class="btn btn-success pull-left mb-5" href="index1.php?action=view">Back</a><br>
  </div>
</div>