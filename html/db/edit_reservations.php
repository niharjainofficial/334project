<?php
include("../config.php");
	$res_id = $_POST['res_id'];
	$room_id = $_POST['room_id'];
	$emp_id = $_POST['emp_id'];
	$date = $_POST['date'];
	
	$sql = $pdo->prepare("UPDATE reservations set room_id=:room_id, emp_id=:emp_id, date=:date WHERE res_id=:res_id");
	$sql->bindParam(':res_id', $res_id);
	$sql->bindParam(':room_id', $room_id);
	$sql->bindParam(':emp_id', $emp_id);
	$sql->bindParam(':date', $date);
	$sql->execute();
	header ('Location: ../manage_reservation.php');
	
?>
