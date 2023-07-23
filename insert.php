<?php
error_reporting(E_ERROR | E_PARSE);
$fullname=$_POST['fullname'];
$rollno=$_POST['rollno'];
$email=$_POST['email'];
$mname=$_POST['mname'];
$fname=$_POST['fname'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$password=$_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "sms");
$sql="insert into students values('$fullname','$rollno','$email','$mname','$fname','$phone','$dob','$age','$password')";
if($conn === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}else{
    if(mysqli_query($conn, $sql)){
        echo "<b><center>"."student inserted"."</center></b>";
    }
}
?>
 