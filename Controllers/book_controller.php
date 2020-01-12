<?php 
 $data = array();
   booking_book($data);
   function booking_book(&$data)
   {
    $function = 'login';
    if(isset($_GET['action'])){
      $function = $_GET['action'];
    }
    $function($data);
    }
   function view(&$data){
           $data['view'] = model_view();
           $data['page'] = "book/view";
     }
     function login(&$data){
           $data['page'] = "login/login";
     }
     function form_login(&$data){
       session_start();
       $data['loginForm'] = m_login($_POST);
       foreach($data['loginForm'] as $key => $login){
         if($login['username'] == $_SESSION['username'] && $login['password'] == $_SESSION['password']){
           $data['page'] = "book/view";
           $data['view'] = model_view();
         }else{
          $data['page'] = "login/login";
         }
       }
     }
     function detail(&$data){
      $data['detail'] = m_detail();
      $data['page'] = "book/detail";
    }

  function delete(&$data){
    $delete_data = m_delete();
    if($delete_data){
        $action = "view";
    }else{
        echo " Cannot Delete";
    }
    header("Location:index.php?action=$action");
 }
 
 function add(&$data){
  $data['page'] = "book/add";
}

function form_data(&$data) {
  $add_data = m_add_data($_POST);
  if($add_data) {
      $action = "view";
  }else {
      $action = "add";
  }
  header("Location: index.php?action=$action");
}

function edit(&$data){
  $data['edit_data'] = m_detail();
  $data['page']= "book/edit";
}

function edit_data(){
  $edit_data = m_edit($_POST);
  if($edit_data) {
    $action = "view";
  }else{
    $action = "edit";
  }
  header("Location: index.php?action=$action");
}

function booking(&$data){
  $data['booking'] = m_detail($_GET);
  $data['page'] = "book/booking";
}
function form_booking(&$data){
  $booking_data = m_booking_data($_POST);
  if($booking_data){
    $action = "view";
  }else{
    $action = "book/booking";
  }
  header("Location: index1.php?action=$action");
}

?>