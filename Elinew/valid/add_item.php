<?php
    session_start();
    //echo $_GET['id'];
    require('connect.php');
    $count = $_POST['count'];
    if(isset($_SESSION['id'])) { 
        $_SESSION['id'] = $_GET['id'];
       // var_dump($_SESSION['id']);
    }
    if(!isset($_SESSION['id'])) $_SESSION['id'] = $_GET['id'];
    
    /* $id = $pdo->query("select id from user where name = '$_COOKIE[user]'")->fetch();
    $up = $pdo->query("update orders set count = count + $count where id_u = $id[id] and id_p = $_SESSION[id]");
    header('location: ../checkout.php'); */

    try{
        $q_ord = $pdo -> beginTransaction();
        $id = $pdo->query("select id from user where name = '$_COOKIE[user]'")->fetch();

        
        ## если такая строка существует
        $dub = $pdo->prepare('select id_u,id_p from orders where id_u = ? and id_p = ?');
        if($Count_row = $dub->rowCount($dub->execute([$id['id'],$_SESSION['id']]) > 0)){
            /* echo "$Count_row"; */
             
            $up = $pdo->query("update orders set count = count + $count where id_u = $id[id] and id_p = $_SESSION[id]");
            $pdo->commit();
            header('location: ../checkout.php');
        }
        else {
            $q_ord = $pdo->prepare('insert into orders (t_order, id_u,id_p,count) values(?,?,?,?)');
            date_default_timezone_set('Europe/Kiev');
            if($q_ord -> execute(array(date('Y-m-d-H:i:s'),$id['id'],$_SESSION['id'],$count))){
                    echo "ok";
            } else echo "aboba";
            $pdo->commit();
            header('location: ../checkout.php');
        }
        
    }  catch (Exception $e){
        $pdo->rollBack();
        echo "Error: ". $e->getMessage();
        die();
    }  

?>