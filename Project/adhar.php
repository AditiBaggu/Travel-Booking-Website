<?php
if(isset($_POST['Submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('png');
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize<1000000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'id/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination );
                header("Location: Booking.php?uploadsuccess");
            }else{
                echo "Your file is too Big !";
            }
        } else {
            echo " There was an error uploading your file!";
        }
    } else {
        echo "There was an error uploading your file";
    }
}
?>