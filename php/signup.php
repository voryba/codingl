<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $path='avatars/' . time() . $_FILES['avatar']['name'];
    	if($path='avatars/' . time() ){
    		$path='avatars/default_avatar.png' ;
    	}
    	move_uploaded_file($_FILES['avatar']['tmp_name'], $path );

    if ($password === $password_confirm) {

        // $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        // if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        //     $_SESSION['message'] = 'Ошибка при загрузке сообщения';
        //     header('Location: ../register.php');
        // }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`full_name`, `login`, `email`, `password`, `avatar`) VALUES ('$full_name', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../login.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
