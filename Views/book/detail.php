<?php  
  include "dashboard/dashboard.php";
?>
<div class="container mt-5">
  <h1 class="text-center text-danger"><b>View Detail of Books</b></h1>
  <hr>
  <div class="row">

    <?php
    foreach ($data['detail'] as $row) {
    ?>
     
      <div class="col-md-4"></div>
      <table class="table table-border">
        <tr>
          <th class="header-table">ID</th>
          <td class="content"><?php echo $row['book_id']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Title</th>
          <td class="content"><?php echo $row['title']; ?></td>
        </tr>
        <tr>
          <th class="header-table">Type</th>
          <td class="content"><?php echo $row['type'];?></td>
        </tr>
        <tr>
          <th class="header-table">Description</th>
          <td class="content"><?php echo $row['description']; ?></td>
        </tr>
      <?php
    }
      ?>
      </table>
      <a class="btn btn-success pull-left mb-5" href="index.php?action=view">Back</a><br>
  </div>
</div>