<?php
     function m_view() {
        include "connection.php";
        $query ="SELECT * FROM tbl_users U INNER JOIN tbl_book B ON B.book_id = U.book_id";
        $result=mysqli_query($conn,$query);
        $rows=[];
        if($result && mysqli_num_rows($result) > 0){
            foreach($result as $recode){
                $rows[] = $recode;
            }
        }
        return $rows ;
    }
    function m_add($data) {
        $fullname = $_POST['username'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $startDate = $_POST['startdate'];
        $endDate = $_POST['enddate'];
        include "connection.php";
        $query = "INSERT INTO tbl_user(Username,gender,email,startDate,endDate)
                    VALUES('$fullname','$gender','$email','$startDate','$endDate')";
        $result = mysqli_query($conn,$query);
        return $result;
    }
    function m_delete() {
        include "connection.php";
        $id = $_GET['id'];
        $query = "DELETE FROM tbl_users WHERE user_id = '$id'";
        $result = mysqli_query( $conn,$query);
        return $result;
    }
    
    function m_detail()
    {
        include "connection.php";
        $id = $_GET['id'];
        $query =mysqli_query($conn,"SELECT * FROM tbl_users U INNER JOIN tbl_book B ON B.book_id = U.book_id WHERE user_id = $id");
        return $query;
    }
    
    function get_book_data() {
        include "connection.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM tbl_book  WHERE book_id=$id";
        $result = mysqli_query($conn,$query);
        $rows = [];
        if($result && mysqli_num_rows($result) > 0 ){
        foreach ($result as $record) {
        $rows[] = $record;
        }
        }
        return $rows;
        }

    function m_update_data() {
         include "connection.php";
        $id = $_GET['id'];
        $user = $_POST['username'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $book = $_POST['book'];
        $startDate = $_POST['startdate'];
        $endDate = $_POST['enddate'];
        $query = "UPDATE tbl_users SET Username = '$user', gender='$gender', email = '$email',book_id='$book', startdate='$startDate',enddate='$endDate'  WHERE user_id = $id";
        $result = mysqli_query($conn, $query);
        return $result;
        }

    function m_booking()
    {
      include "connection.php";
      $id = $_GET['id'];
      $query = mysqli_query($conn, "SELECT * FROM tbl_users WHERE user_id=$id");
      return $query;
    }
