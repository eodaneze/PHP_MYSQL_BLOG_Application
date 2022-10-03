<?php
  require('../includes/logic.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
         <?php 
            foreach($query as $q){
                 ?>
                     <div class="bg-dark p-5 rounded-lg text-white text-center">
                          <h1><?=  $q['title'] ?></h1>

                          <div class="d-flex mt-2 justify-content-center align-items-center">
                               <a href="edit.php?id=<?= $q['id'] ?>" class="btn btn-light btn-sm mx-3">Edit</a>
                               <a href="../includes/delete.php?id=<?= $q['id'] ?>" class="btn btn-danger btn-sm">Delete</a>

                               <!-- <form method="post">
                                     <input type="hidden" name="id" value="<?= $q['id'] ?>" >
                                     <button class="btn btn-danger btn-sm ml-2">Delete</button>
                               </form> -->
                          </div>
                        </div>
                        <p class="mt-5 border-left border-dark pl-3"><?= $q['content'] ?></p>
                 <?php
            }

        ?>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>