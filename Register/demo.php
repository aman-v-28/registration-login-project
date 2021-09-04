<?php

include 'conf.php';

if(isset($_POST['save']))
{

$name = $_POST['myname'];
$phone = $_POST['myphone'];
$email = $_POST['myemail'];
$address = $_POST['myaddress'];
$dob = date('Y-m-d', strtotime($_POST['myDOB']));
$password = $_POST['mypassword'];
$gender = $_POST['myGender'];

$query = " insert into members (member_name, member_email, member_mobile, member_add, password, DOB, Gender) 
values ('$name', '$email', '$phone', '$address', '$password','$dob', '$gender')";

$query_run = mysqli_query($conn,$query);

sleep(2);
header('location:../index.html');

}

?>
