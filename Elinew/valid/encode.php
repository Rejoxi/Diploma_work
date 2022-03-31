<?php
require('connect.php');
$passwd = $_POST['passwd'];
$login = $_POST['login'];
$hash = password_hash($passwd, PASSWORD_DEFAULT);
echo "<p>$hash</p>";
$sql = $pdo->prepare('insert into CRYPT(passwd, login) values(?,?)');
if ($sql->execute(array($hash, $login))) {
    echo 'OK!';
}
