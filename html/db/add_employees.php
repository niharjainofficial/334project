<?php
include("../config.php");
if (($_POST['emp_name']!='')&&($_POST['emp_email']!='')&&($_POST['password']!='')) {
        
        echo $emp_name = $_POST['emp_name'];
        echo $emp_email = $_POST['emp_email'];
        echo $password = $_POST['password'];
            
        $sql = $pdo->prepare("INSERT INTO employee (emp_name, emp_email, password) VALUES(:emp_name, :emp_email, :password)");
        $sql->bindParam(':emp_name', $emp_name); 
        $sql->bindParam(':emp_email', $emp_email);
        $sql->bindParam(':password', $password);  
        $sql->execute();
    }
    header("Location: ../manage_employees.php");
?>