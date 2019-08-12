<?php session_start();
include("session.php");
include("config.php");

	$username=$_POST['username'];
	$password=$_POST['password'];
					
	$sql = $pdo->prepare("SELECT * from users where username = :username and password = :password");


	$sql->bindParam(':username', $username);
	$sql->bindParam(':password', $password);
				
	$sql->execute();				
	$r= $sql->fetch();
	$user_id =  $r['usercode'];	
				

  	if($r['usercode'] == 1)
    {
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['usercode']=$userrcode;	
		header ('Location:dashboard.php');
    }
		
    else
	{   
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['usercode']=$userrcode;	
		header ('Location: employee_dashboard.php');			
    }
							
?>