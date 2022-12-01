<?php
session_start();
$conn = mysqli_connect("localhost","root","","trip");

if(isset($_POST['book']))
{
    $mode = $_POST['mode'];
    foreach ($mode as $item)
    {
        $query = "UPDATE registration SET Booking = '$item'";
        $query_run = mysqli_query($conn,$query);
    }
    if($query_run)
    {
        $_SESSION['status'] = "Updated-Successfully";
        header("location: ./confirm.php");
    }else{
        $_SESSION['status'] = "Not Updated Successfully";
    }
}

?>