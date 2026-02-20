<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];

$sql = "INSERT INTO appointments 
(name, email, phone, appointment_date, appointment_time, message) 
VALUES 
('$name', '$email', '$phone', '$date', '$time', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "<span style='color:green'>Appointment booked successfully!</span>";
} else {
    echo "<span style='color:red'>Failed to book appointment.</span>";
}
?>