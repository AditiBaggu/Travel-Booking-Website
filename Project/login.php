<?php
      $servername="localhost";
$username="root";
$password="";
$dbname="trip";
      $conn=new mysqli($servername,$username,$password,$dbname) or die("connection failed");
if(!empty($_POST['login']))
{
    $uname=$_POST['email'];
    $pass=$_POST['password'];
    $query="select * from registration where Email='$uname' and Password='$pass'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        header("location: ./Booking.php");
    }else{
        echo "Incorrect password/username";
    }
}
?>