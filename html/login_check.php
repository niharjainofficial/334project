<?php
	if (isset ($_SESSION['username'])&& isset($_SESSION['password'])){
		$username=$_SESSION['username'];
		$password=$_SESSION['password'];
		$sql = $pdo->prepare("SELECT * from users where username = :username and password = :password");
		$sql->bindParam(':username', $username);
		$sql->bindParam(':password', $password);
					
		$sql->execute();				
		$r= $sql->fetch();
		$user_id =  $r['username'];	
	} else {
		 header ('Location: login.php');	
	}
?>
