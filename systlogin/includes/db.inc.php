<?php 
$servername="localhost";
$dBUsername="root";
$dBpassword="";
$dBname="systemlogin";
$conn=mysqli_connect($servername,$dBUsername,$dBpassword,$dBname);  //connect to database
if(!$conn){  //check connection
    die("Connection error". mysqli_connect_error());
   } 
if(mysqli_connect_errno()){
    die("cannot connect with database".mysqli_connect_error());
}
