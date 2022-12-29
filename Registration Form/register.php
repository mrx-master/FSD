<?php
require_once 'dbconnection.php';

$username=$password=$firstname=$lastname=$gender=$email=$course=$mobile="";

if(isset($_POST['submit'])){

    //Access the values of input fields
    $username = trim($_POST['username']);
    $password = trim($_POST['password2']);
    $firstname = trim($_POST['fname']);
    $lastname = trim($_POST['lname']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $course = trim($_POST['course']);
    $mobile = trim($_POST['mobile']);

    //Define SQL query
    $sql = "INSERT INTO student(username,password,firstname,lastname,gender,email,course,mobile)values('$username','$password','$firstname','$lastname','$gender','$email','$course','$mobile')";

    //Execute SQL Query
    $query = mysqli_query($conn,$sql);

    if($query){
       echo "<script>alert('Your are registered successfully!!')</script>";
    }
    else{
        echo "<script>alert('Sorry!! Error!!')</script>";
    }

}
else{

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 id="title">Registration Form</h1>
        <hr>
        <div id="error-container"></div>
        <div class="container">
            <form id="form" action="register.php" method="POST">
                <div class="row">
                    <div class="form-label">
                        <label>Username:</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="username" placeholder="Enter your username" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-label">
                        <label>Password:</label>
                    </div>
                    <div class="form-input">
                        <input type="password" name="password1" placeholder="Enter your password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-label">
                        <label>Confirm Password:</label>
                    </div>
                    <div class="form-input">
                        <input type="password" name="password2" placeholder="Enter your password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-label">
                        <label>Firstname:</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="fname" placeholder="Enter your firstname" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-label">
                        <label>Lastname:</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="lname" placeholder="Enter your lastname" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-label">
                        <label>Gender:</label>
                    </div>
                    <div class="form-input">                        
                        <input type="radio" name="gender" value="Male" required>Male
                        <input type="radio" name="gender" value="Female">Female
                    </div>
                </div>
                <div class="row">
                    <div class="form-label">
                        <label>Email:</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="email" placeholder="Enter your email id" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-label">
                        <label>Course:</label>
                    </div>
                    <div class="form-input">
                        <select name="course" required>
                            <option>FY COMP</option>
                            <option>SY COMP</option>
                            <option>TY COMP</option>
                            <option>Btech COMP</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-label">
                        <label>Mobile No.:</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="mobile" placeholder="Enter your mobile number" required>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" name="submit" value="Submit" onclick="return validate();">
                    <input type="reset" name="reset" value="Reset">
                </div>
                <p>Already Registered? <a href="login.php">Sign In</a></p>
            </form>
        </div>
    </body>
    <script src="script.js"></script>
</html>