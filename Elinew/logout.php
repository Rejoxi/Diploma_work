<?php
        session_start();
        unset($_COOKIE['user']);
        setcookie('user','',-1,'/');
        session_destroy();
        header('location: index.php');
?>