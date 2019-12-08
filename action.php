<?php

$a = $_POST['name'];
$e = $_POST['message'];

$servername="localhost";
$username="root";
$password="";
$dbname="coffee";
$conn = new mysqli($servername,$username,$password,$dbname);

$sql = "insert into contact_us (name,message) values ('$a','$e')";

$run=mysqli_query($conn,$sql);

$conn->close();

header("refresh:0;url=contact.html");

?>
