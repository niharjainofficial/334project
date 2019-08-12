<?php
include("../config.php");
	$id = $_POST['id'];
	$emp_email = $_POST['emp_email'];
	$password = $_POST['password'];
	$emp_name = $_POST['emp_name'];

	$sql = $pdo->prepare("UPDATE employee set emp_name=:emp_name, emp_email=:emp_email, password=:password WHERE id=:id");
	$sql->bindParam(':emp_name', $emp_name);
	$sql->bindParam(':emp_email', $emp_email);
	$sql->bindParam(':password', $password);
	$sql->bindParam(':id', $id);
	$sql->execute();
	header ('Location: ../manage_employees.php');
	
?>
