<?php
require_once("conn.php");

@$uname=$_POST["uname"];
@$psw=$_POST["psw"];

$insert="INSERT INTO information(name,pwd) VALUES ('$uname','$psw')";
$qry=mysqli_query($conn,$insert);

if($qry==true){
    header("location: index.php");
}







?>