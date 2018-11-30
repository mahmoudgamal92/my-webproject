<?php
include_once 'dbconnect.php'

?>
<?php

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($con,"SELECT name FROM user WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){

header("location:examselection.php?q=1");

}
else
{
    print'<script>alert("sorry you Are not registerd please sign frist");</script>';
//header("location:$ref?w=Wrong Username or Password");
}

?>