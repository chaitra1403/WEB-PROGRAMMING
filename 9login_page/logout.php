<?php
echo "loged out successfully<br>";
session_start();
//session_unset();
session_destroy();
//header("location:login.html");
echo "<a href='login.html'>Back to home</a>";
?>