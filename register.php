<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/stylee.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="php/signup.php" method="post">
        <div class="avatar_upload">
          <img src="img/uploadavatar.png" alt="" width="174px" height="174px">
          <span>Загрузите фото профиля</span>
          <input type="file" name="avatar">
        </div>

        <label>FN</label>
        <input type="text" name="full_name" placeholder="Enter your name">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter your login">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter e-mail address">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <label>Confirm password</label>
        <input type="password" name="password_confirm" placeholder="Confirm password">
        <button type="submit">Enter</button>
        <p>
            Do you have an account? - <a href="login.php">Authorize</a>!
        </p>
        <?php
            if (isset($_SESSION['message'])) {
              echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';

            }
                unset($_SESSION['message']);

        ?>
    </form>

</body>
</html>
