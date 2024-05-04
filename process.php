<?php
include 'database.php';
if(isset($_POST['book'])) {
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $origin=$_POST['origin'];
    $destination=$_POST['destination'];
    $depart=$_POST['depart'];
    $return=$_POST['return'];
    $seat=$_POST['seat'];
    $payby=$_POST['payby'];

    $sql="insert into roundtrip_new (passenger_name,Contact,Origin,Destination,depart_date,return_date,Seat,PayBy)
    values('$name','$contact','$origin','$destination','$depart','$return','$seat','$payby')";
    if(mysqli_query($con,$sql))
    {
        echo"<script>alert('new record inserted')</script>";
        echo"<script>window.open('Book.php','_self)</script>";
    } 
    else {
        echo"error".mysqli_error($con);
    }
    mysqli_close($con);
} 
else
{
    echo "Please submit Form";
} 
?>