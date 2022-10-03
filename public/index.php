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
          if(isset($_REQUEST['success'])){
               ?>
        <?php
                           if($_REQUEST['success'] == 'added'){
                               ?>
                            <div class="alert alert-success text-center" role="alert">Post has been added successfully</div>
        <?php
                           }elseif($_REQUEST['success'] == 'updated'){
                               ?>
                                       <div class="alert alert-success text-center" role="alert">Post has been updated successfully</div>
                               <?php
                           }elseif($_REQUEST['message'] == 'deleted'){
                                ?>
                                    <div class="alert alert-success text-center" role="alert">Post has been deleted successfully</div>
                                <?php
                           }
                       ?>
        <?php
          }

        ?>
        <div class="text-center">
            <a href="./create.php" class="btn btn-outline-dark">+ Create a new Post</a>
        </div>

        <div class="row">

            <?php
           foreach($query as $q){
               ?>
            <div class="col-4 d-flex justify-content-center">
                <div class="card text-white bg-dark mt-5">
                    <div class="card-body" style="width: 18rem;">
                        <h5 class="card-title"><?= $q['title']?></h5>
                        <p class="card-text"><?= $q['content'] ?></p>
                        <a href="view.php?id=<?= $q['id'] ?>" class="btn btn-light">Read More <span
                                class="text-danger">&rarr;</span></a>
                    </div>

                </div>
            </div>
            <?php
           }
        ?>

        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>