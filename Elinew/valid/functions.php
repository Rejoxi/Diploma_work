<?php
require_once "connect.php";

function get_course_by_id( $id ){
	global $connection;

	$query = "SELECT * FROM product WHERE id=" . $id;
	$req = mysqli_query($connection, $query);
	$resp = mysqli_fetch_assoc($req);

	return $resp;
}