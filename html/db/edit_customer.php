<?php
include("../config.php");
if (($_POST['c_name']!='')&&($_POST['c_email']!='')) {
        
        echo $c_name = $_POST['c_name'];
        echo $c_email = $_POST['c_email'];
        echo $c_id = $_POST['c_id'];

            
        $sql = $pdo->prepare("UPDATE customers set c_name=:c_name, c_email=:c_email WHERE c_id=:c_id");
        $sql->bindParam(':c_id', $c_id);
        $sql->bindParam(':c_name', $c_name); 
        $sql->bindParam(':c_email', $c_email);
        $sql->execute();
    }
    header("Location: ../employee_add_customer.php");
?>