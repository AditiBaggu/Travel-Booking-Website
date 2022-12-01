<?php
$name = $_POST['Name'];
$gender = $_POST['gender'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$image=$_POST['file'];

//Database Connection
$conn = new mysqli('localhost','root','','trip');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn -> prepare ("insert into registration(Name, Gender, Phone, Email, Password) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi",$name, $gender, $phone, $email, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("location: ./Booking.php");
}
