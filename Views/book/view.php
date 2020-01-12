
<?php  
  include "dashboard/dashboard.php";
?>
<div class="container mt-5">
  <h1 class="text-danger text-center"><b>List of Books</b></h1>
</div>
<hr>

<div class="row">
  <div class="col-md-12">
    <a href="index.php?action=add" class="btn btn-success">Add New</a>
  </div>
</div>
<table class="table table-bordered mt-3 border-success">
  <thead class="alert-success text-center">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Type</th>
      <th>Description</th>
      <th>Action</th>
      <th>Booking</th>
    </tr>

  </thead>
  <?php
  $id = 1;
  if (isset($data['view'])) {
    foreach ($data['view'] as $result) {
  ?>

      <tbody>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $result['title']; ?></td>
          <td><?php echo $result['type']; ?></td>
          <td><?php echo $result['description']; ?></td>
          <td>
            <a href="index.php?action=detail&id=<?php echo $result['book_id']; ?>"><i class="material-icons text-success">remove_red_eye</i></a>
            <a href="index.php?action=edit&id=<?php echo $result['book_id']; ?>"><i class="material-icons">edit</i></a>
            <a href="index.php?action=delete&id=<?php echo $result['book_id']; ?>"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to delete?');">delete</i></a>
          </td>
          <td>
            <a href="index.php?action=booking&id=<?php echo $result['book_id'];?>" class="btn border-info text-info">Booking</a>
          </td>
        </tr>
      </tbody>
  <?php
      $id++;
    }
  }
  ?>
</table>