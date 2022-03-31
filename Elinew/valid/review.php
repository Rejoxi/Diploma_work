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

    $email = filter_var(clean($_POST['email']), FILTER_VALIDATE_EMAIL);
    $name = clean($_POST['name']);
    $subject = clean($_POST['subject']);
    $text = clean($_POST['review']);

    try{
        $pdo ->beginTransaction();
        $q = $pdo -> prepare ('insert into review(name,subject,email,text) values (?,?,?,?)');
        if($q ->execute([$name,$subject,$email,$text])){
            $_SESSION['message'] = '<p>The message has been sent</p>';
            $pdo->commit();
            header('location: ../contact.php');
        }
        else {
            $_SESSION['message'] = '<p>The message has not been sent</p>';
            $pdo->rollBack();
            header('location: ../contact.php');
        }

    } catch(Exception $e){
        $pdo->rollBack();
        echo "Error: ". $e->getMessage();
        die();
    }
    
?>