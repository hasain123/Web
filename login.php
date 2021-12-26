<?php
if (isset($_POST['login'])) {
    $users = array(
        array("user" => "user1@blog.com", "pass" => "pass1", "name" => "John"),
        array("user" => "user2@blog.com", "pass" => "pass2", "name" => "Vein"),
        array("user" => "user3@blog.com", "pass" => "pass3", "name" => "Potter"),
    );

    $user_email = $_POST['user-email'];
    $user_password = $_POST['user-password'];


    foreach ($users as  $user) {
        if ($user['user'] == $user_email && $user['pass'] == $user_password) {
            session_start();
            $_SESSION['user'] = $user;
            header("Location: home.php");
        }
    }
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

    <div class="d-flex justify-content-center"   id="main" >
        <form action="" method="post">
            <div>
                <label style="font-weight: bolder; font-style:italic; font-size:20px;">UserName</label> <br>
                <input type="email" name="user-email" required>
            </div>
            <div>
                <label style="font-weight: bolder; font-style:italic; font-size:20px;" >Password</label> <br>
                <input type="password" name="user-password" required>
            </div>
            <input type="submit" name='login' value='Login' class="btn btn-outline-primary mt-3 btn-block">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>