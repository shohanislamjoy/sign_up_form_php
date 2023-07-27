<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];


$server="localhost";
$user='root';
$pass="";
$database="fun_users";

$conn=mysqli_connect($server,$user,$pass,$database);


// table query

// CREATE TABLE `fun_users`.`userinfo` (`ID` INT(32) NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(32) NOT NULL , `last_name` VARCHAR(32) NOT NULL , `email` VARCHAR(128) NOT NULL , `password` VARCHAR(128) NOT NULL , PRIMARY KEY




if(!$conn){
  die("Error database not found".mysqli_connect_error());
}

$sql="INSERT INTO userinfo (first_name,last_name,email,password) VALUE('$fname','$lname','$email','$password')";

if(mysqli_query($conn,$sql)){
    echo"New User Registered";
}
else{
    echo"Incorrect SQL query!!".mysqli_error($conn);
}

mysqli_close($conn);



?>