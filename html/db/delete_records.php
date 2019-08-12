<?php
$action = $_GET['action'];

switch ($action) {
	case 'employee':
		echo delete_employee();
		break;

	case 'reservations':
		echo delete_reservation();
		break;

	case 'ereservations':
		echo delete_ereservation();
		break;		

	case 'customers':
		echo delete_customers();
		break;	

		default:
		# code...
		break;
}

function delete_employee()
{
	include("../config.php");
	$id = $_GET['id'];

	$sql = "DELETE FROM employee where id=:id";
	$sql = $pdo->prepare($sql);
	$sql->bindParam(":id",$id,PDO::PARAM_INT); 
	$sql->execute();

	return true;
}

function delete_reservation()
{
	include("../config.php");
	$id = $_GET['id'];

	$sql = "DELETE FROM reservations where res_id=:id";
	$sql = $pdo->prepare($sql);
	$sql->bindParam(":id",$id,PDO::PARAM_INT); 
	$sql->execute();

	return true;
}

function delete_ereservation()
{
	include("../config.php");
	$id = $_GET['id'];

	$sql = "DELETE FROM reservations where res_id=:id";
	$sql = $pdo->prepare($sql);
	$sql->bindParam(":id",$id,PDO::PARAM_INT); 
	$sql->execute();

	return true;
}

function delete_customers()
{
	include("../config.php");
	$id = $_GET['id'];

	$sql = "DELETE FROM customers where c_id=:id";
	$sql = $pdo->prepare($sql);
	$sql->bindParam(":id",$id,PDO::PARAM_INT); 
	$sql->execute();

	return true;
}

?>