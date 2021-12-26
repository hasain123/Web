<?php
session_start();
if (isset($_SESSION['todo'])) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php include_once('navbar.php') ?>
    <?php require_once('components.php'); ?>

    <div class="container mt-3">
    <div class="card-header " id="link">
    <p class="bold" >Todo Component View - View more in <a href="todo.php"  class="link"  id="one">Todo</a> page.</p> 
        </div>
        <?= getTodoDisplay(); ?>
    </div>
    <div class="container  mt-3">
        <div class="card-header "  id="link">
            <p class="bold" >Blog Component View - View more in <a href="blog.php" class="link"  id="one">Blog</a> page.</p> 
        </div>
        <?= getPosts(); ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>