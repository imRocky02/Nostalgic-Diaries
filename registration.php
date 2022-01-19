<?php


session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'usereg');
$name = $_POST['username'];
$email = $_POST['emailAdress'];
$mobile = $_POST['phone'];
$password = $_POST['password'];




?>