<?php 
   $conn = mysqli_connect('localhost','root','','blog_db');

   if(!$conn){
       echo "connection failed";
   };

  $sql = "select * from blog_data";
  $query = mysqli_query($conn,$sql);

  
   if(isset($_REQUEST['new_post'])){
       $title = $_REQUEST['title'];
       $content = $_REQUEST['content'];

       $sql = "INSERT INTO blog_data (title, content) VALUES ('$title', '$content')";
       mysqli_query($conn, $sql);

       header('location: ../public/index.php?success=added');
       exit();
   }



?>