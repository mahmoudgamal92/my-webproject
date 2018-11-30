<?php
$con= new mysqli('localhost','root','','myexam')
or die("Could not connect to mysql".mysqli_error($con));

$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$college = $_POST['college'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$query=mysqli_query($con,"INSERT INTO user(name,gender,college,email,mobile,password) VALUES  ('$name' , '$gender' , '$college','$email' ,'$mobile', '$password')");


echo "<center><h1>you have been regestired!!! please Goback and login to get Examed</h1><img src='img/tick.png' width=20%></center>";

?>