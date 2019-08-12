<?php
include("../config.php");

if (($_POST['day']!='')&&($_POST['month']!='')&&($_POST['year']!='')&&($_POST['room_id']!='')&&($_POST['id']!='')) {
            
        echo $room_id = $_POST['room_id'];
        echo $id = $_POST['id'];
        echo $month = $_POST['month'];
        echo $date = $_POST['year']."-".$_POST['month']."-".$_POST['day'];

        $sql = $pdo->prepare("INSERT INTO reservations (room_id, emp_id, date, month) VALUES(:room_id, :id, :date, :month)");
        $sql->bindParam(':room_id', $room_id); 
        $sql->bindParam(':id', $id);
        $sql->bindParam(':date', $date);
        $sql->bindParam(':month', $month);
        $sql->execute();
    }
    header("Location: ../manage_reservation.php");
?>