<?php
if(!isset($_POST['submit']))
{
    $username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost:3306","root","","student");
$sql="SELECT * from login WHERE username='$username' AND password='$password' ";
$result=mysqli_query($con,$sql);
$resultcheck=mysqli_query($con,$result);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0)
{
    echo "Login Succesfully";
}
else{
    echo "Username or Password Incorrect";
}
}
?;