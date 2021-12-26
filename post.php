<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
if (isset($_POST['Post'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $user = $_SESSION['user']['name'];

    require_once('utilities.php');

    $conn = getConnection();

    $conn->query("INSERT INTO blog (title, body, user) VALUES ('$title', '$body', '$user')");

    header("Location: blog.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write Post</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>

<body>

    <?php include_once('navbar.php') ?>
    <div class="container bg-light" >
        <form action="" method="post" class="mt-5"  >
            <div>
                <label style="color:blue; font-size: 30px; font-style:italic;" >Post Title</label>
                <input class="form-control" type="text" name="title" required  style="border:solid black;">
            </div>
            <div>
                <label style="color:blue; font-size: 30px; font-style:italic;">Post Body</label>
                <textarea class="form-control" name='body' rows="3" required  style="border:solid black;"></textarea>
            </div>
            <input type="submit" style="padding: 14px 40px; text-align:center; font-size:15px; font-weight:bold" name="Post">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>