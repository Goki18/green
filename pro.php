<?php 
include("connect.php");
if(isset($_POST['butt']));
{
    $email = $_POST["email"];
    $result = mysqli_query($con,"Insert into gok values('$email')");
}
if ($result) {
    echo"Subscribed.Thank You";
}
else{
    echo"failed";
}
?>