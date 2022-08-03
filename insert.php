<?php
include "config.php";

$name= $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$itemN= $_POST['itemN'];
$itemID= $_POST['itemID'];
$address= $_POST['address'];
$comment= $_POST['comment'];

$sql=" INSERT INTO `juha1`(`name`,`email`,`mobile`,`itemN`,`itemID`,`address`,`comment`) VALUE ('$name','$email','$mobile','$itemN','$itemID','$address','$comment')";

if(mysqli_query($conn,$sql)){
    echo "successfull recived";
}
else{
    echo "error";
}


?>