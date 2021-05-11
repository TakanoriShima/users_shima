<?php
    require_once 'User.php';
    // コントローラ
    session_start();
    // var_dump($_POST);
    $name = $_POST['name'];
    $age = $_POST['age'];
    // print $name;
    // print $age;
    $new_user = new User($name, $age);
    // $morita = new User('森田', 23);
    // var_dump($new_user);
    $_SESSION['new_user'] = $new_user;
    
    // リダイレクト
    header('Location: index.php');
    exit;
?>