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
  

   if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];

        $sql = "select * from blog_data where id = $id ";
        $query = mysqli_query($conn, $sql);
   }

   if(isset($_REQUEST['update'])){
       $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE blog_data SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header('location: ../public/index.php?success=updated');
        exit();
   }

?>