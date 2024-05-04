<?php
$servername="localhost";
$username="root";
$password="";
$database="booking";
$con=mysqli_connect($servername,$username,$password,$database);
//$con=mysqli_connect("localhost","root","","RoundTrip(1)");
if(!$con)
{
    die("error detected".mysqli_error($con));
}
else
{
    echo"connection established successfully";
}