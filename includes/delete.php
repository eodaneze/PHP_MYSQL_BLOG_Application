<?php 
  require('../includes/logic.php');
  if(isset($_REQUEST['id'])){
      $id = $_REQUEST['id'];
      $sql = "Delete from blog_data where id = $id";
      $result = mysqli_query($conn, $sql);
      if($result){
         header("location:../public/index.php?message=deleted");
         exit();
      }
  }

?>