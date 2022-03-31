<?php
    session_start();
    function clean($value){
        
            $value = trim($value);
            $value = stripslashes($value);
            $value = strip_tags($value);
            $value = htmlspecialchars($value);
        
        return $value;
    }
    require('connect.php');

    
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        clean($name);
    }
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
        clean($email);
        $email = filter_var($email,FILTER_VALIDATE_EMAIL);
        var_dump($email);
    }
    if(!empty($_POST['password'])){
        $passwd = $_POST['password'];
        $passwd = clean($passwd);
    }
    /* $name = 'adssdfdasdaasasddsdsbg';
    $passwd = 'adsfbgasdfasdadasf';
    $email = 'sdfbcqasasasdddasdwecsdf@mail.com'; */
    
    $passwd = password_hash($passwd, PASSWORD_DEFAULT);
    $q = $pdo->prepare('insert into USER(name,email,passwd) VALUES(?,?,?)');
    $q1 = $pdo->prepare ('select name,email from user where name = ? or email = ?');
    if($q1->rowCount($q1->execute(array($name,$email))) < 1) {
        //echo '</br>ugu';
        if(!$q -> execute(array($name,$email,$passwd))){
            echo '<p>ERROR...</p>';
        }
        else { 
            setcookie('user', $name, 0, '/');
            header('location: ../index.php');
        }
        

    }
    else {
        $_SESSION['error'] = '<p>The same line exists</p>';
        header('location: ../register.php');
    } 
?>
