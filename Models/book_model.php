  
<?php
function model_view()
{
  include "connection.php";
  $query = mysqli_query($conn, "SELECT * FROM tbl_book");
  $result = [];
  if ($query && mysqli_num_rows($query) > 0) {
    foreach ($query as $value) {
      $result[] = $value;
    }
  }
  return $result;
}
function m_detail()
{
  include "connection.php";
  $id = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM tbl_book WHERE book_id=$id");
  return $query;
}

function m_delete()
{
  include "connection.php";
  $id = $_GET['id'];
  $query = " DELETE FROM tbl_book WHERE book_id = '$id'";
  $result = mysqli_query($conn, $query);
  return $result;
}

function m_add_data($data)
{
  include "connection.php";
  $title = $_POST['title'];
  $desp = $_POST['desp'];
  $type = $_POST['type'];
  $query = "INSERT INTO tbl_book(title,description,type)
            VALUES('$title', '$desp', '$type')";
  $result = mysqli_query($conn, $query);
  return $result;
}

function m_edit(){
  include "connection.php";
  $id = $_GET['id'];
  $title = $_POST['title'];
  $desp = $_POST['desp'];
  $type = $_POST['type'];
  $query = "UPDATE tbl_book SET title='$title',description='$desp',type='$type' WHERE book_id = $id";
  $result = mysqli_query($conn, $query);
  return $result;
}

function m_booking_data($data)
{
  include "connection.php";
  $id = $_POST['id'];
  $username = $_POST['username'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $startDate = $_POST['startdate'];
  $enddate = $_POST['enddate'];
  
  $query ="INSERT INTO tbl_users(Username,gender,email,startdate,enddate,book_id) 
 VALUES ('$username', '$gender','$email','$startDate','$enddate', 
(SELECT book_id FROM tbl_book WHERE book_id = $id))";
 $result =  mysqli_query($conn,$query);
 return $result;
}


function m_login(){
  include "connection.php";
  $username = $_POST['username'];
  $password  = $_POST['password'];
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  $query = mysqli_query($conn, "SELECT * FROM user_name");
  $login = [];
  foreach($query as $result){
    $login[] = $result;
  }
  return $login;
}
?>