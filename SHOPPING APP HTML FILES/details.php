<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn){
    die("connection failed" .mysqli-connect_error());
}
if(isset($_POST['save']))
{
    $name=$_POST['Name'];
    $emailid=$_POST['EmailId'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];

    $sql_query="INSERT INTO details(name,emailid,password,gender,phone) values ('$name','$emailid','$password','$gender','$phone')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "new details entry inserted successfully";
    }
    else{
          echo "error" .$sql. "".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>