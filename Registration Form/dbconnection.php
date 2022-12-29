<?php  

define('DB_SERVER', 'db');
define('DB_USERNAME', 'temp');
define('DB_PASSWORD', 'temp');
define('DB_NAME', 'student');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn === false) {
    die("Error: Could not Connect, " . mysqli_connect_error());
}

?>