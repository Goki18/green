<?php 
include("connect.php");
if(isset($_POST['submit']));
{
    $name = $_POST["name"];
    $password = $_POST["password"];
    $result = mysqli_query($con,"Insert into goki values('$name','$password')");
}
if ($result) {
    echo"Registration Sucess";
}
else{
    echo"failed";
}
?>