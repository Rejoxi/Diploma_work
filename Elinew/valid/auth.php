<?php
    require('../valid/connect.php');
    session_start();
    if(!empty($_POST['email']))
        $email = $_POST['email'];
    if(!empty($_POST['password']))
        $passwd = $_POST['password'];

    $P_hash = $pdo->prepare('SELECT passwd,name FROM USER WHERE email = ?');
    
    $P_hash->execute(array($email));
    $hash = $P_hash->fetch(PDO::FETCH_BOTH);
    
    if($verr = password_verify($passwd, $hash['passwd'])){
        setcookie('user', $hash['name'], 0, '/');
        header('Location:../index.php');
    }else {
        $_SESSION['error'] = "incorrectly entered data";
        header('location: ../login.php');
    } 
?>