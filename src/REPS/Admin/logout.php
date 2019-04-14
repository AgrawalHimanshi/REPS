

<?php
session_start();
session_destroy(); //Destroy it! So we are logged out now

header("location: Administrator_Login.php"); // Move back to login.php with a logout message

?>