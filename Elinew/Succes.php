<?php
    session_start();
    require('valid/connect.php');
    try{
        $pdo->beginTransaction();
        $id = $pdo->query("select id from user where name = '$_COOKIE[user]'")->fetch();
        $q = $pdo->query("delete from orders where id_u = $id[id]");
        $pdo->commit();
    }catch(Exception $e){
        $pdo->rollBack();
    }
        session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/logo5.png" type="image/x-icon">
	<link href="scss/style.scss" rel="stylesheet" type="text/css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/translate.js" defer></script>
    <title>Elinew</title>
</head>
<body>
	<div class="container">
    <div class="title lang" key="SuccesOrd">Order successfully received!</div>
    <div class="subtitle lang" key="Danil">Our supplier Daniel will find you and give the purchase</div>
    <!-- Карточка и оплата -->
    <a class="subtitle lang" href="../index.php" key="Home">Home</a>
	</div>
</body>
</html>