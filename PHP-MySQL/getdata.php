<?php
//include the database connection file
require_once 'dbconnect.php';
session_start();
//Check whether session is set or not
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit;
}

$name= $_REQUEST["name"];

$sql = "SELECT *from student where username='$name'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo "<table border='1'><tr><td>ID</td><td>Username</td><td>Password</td><td>Firstname</td><td>Lastname</td></tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['password']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>";
    }
    echo "</table>";
}else{
    echo "0 Results";
}

?>