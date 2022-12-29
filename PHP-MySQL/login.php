<?php
require_once 'dbconnect.php';
session_start();

$username=$password="";
if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if(!$username==''&& !$password==''){
        $sql = "SELECT *FROM student where username='$username' and password='$password'";

        $query = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($query);

        if($count == 1){
            $_SESSION['username']=$username;
            header("location:welcome.php");
        }
        else{
            echo "<script>alert('Username or password is incorrect!!')</script>";
        }
    }
    else{
        echo "<script>alert('All Fields should not be blank!!')</script>";
    }
}
else{

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Login Form</title>
</head>
<body>
<h3>Student Login Form</h3>
<hr>
<form action="" method="POST">
    <label>Username</label><br>
    <input type="text" name="username" placeholder="Enter Username"><br>
    <label>Password</label><br>
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit" value="Login">
    <input type="reset" name="reset" value="Reset">
    <p>Not Registered? <a href="register.php">Sign Up</a></p>
</form>
</body>
</html>