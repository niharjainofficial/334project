<?php
include("../config.php");
if (($_POST['c_name']!='')&&($_POST['c_email']!='')) {
        

        echo $c_name = $_POST['c_name'];
        echo $c_email = $_POST['c_email'];
            
        $sql = $pdo->prepare("INSERT INTO customers (c_name, c_email) VALUES(:c_name, :c_email)");
        $sql->bindParam(':c_name', $c_name); 
        $sql->bindParam(':c_email', $c_email);
        $sql->execute();
    }
    header("Location: ../employee_add_customer.php");
?>