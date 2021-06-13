<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization and Registration</title>
    <link rel="stylesheet" href="css/stylee.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <img src="<?php echo  $_SESSION['user']['avatar']  ?>" alt="" style="width: 200px; border: 0.5px solid grey; border-radius:50px;">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        Move to a <a href="index.php">Main Page</a>
        <a href="php/logout.php" class="logout">Log out</a>
    </form>

</body>
</html>
