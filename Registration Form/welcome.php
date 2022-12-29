<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
    <script type="text/javascript">
        function showStudent(str){
            var xhttp;
            if(str==""){
                document.getElementById("shw").innerHTML = "";
                return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.open("GET","getdata.php?name="+str,true);
            xhttp.send();
            xhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    document.getElementById("shw").innerHTML = this.responseText;
                }
            };

        }
    </script>
</head>
<body>
<h3>Welcome <?php echo $_SESSION['username'];?></h3>
<hr>
<p>Select name of student:</p>
<form>
    <select onchange="showStudent(this.value)">
        <option value="">Select Student</option>
        <option value="santosh">Santosh</option>
        <option value="kunal">Kunal</option>
        <option value="sujit">Sujit</option>
    <option value="bhavesh">Bhavesh</option>
    </select>
</form>
<br>
<div id="shw"></div>
<br>
<form action="logout.php">
<input type="submit" name="sbt" value="Logout">
</form>
</body>
</html>
