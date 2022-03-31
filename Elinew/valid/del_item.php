<?php
    session_start();
    require('connect.php');
    echo $_GET['id']. "</br>";
    $id = $pdo->query("select id from user where name = '$_COOKIE[user]'")->fetch();
    $del_item = $pdo -> query("delete from orders where id_u = $id[id] and id_p = $_GET[id]");
    header('location: ../checkout.php'); 
    echo "delete from orders where id_u = $id[id] and id_p = $_GET[id]";
?>