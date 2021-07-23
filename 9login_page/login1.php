<?php
$uid=$_POST['uid1'];
$pwd=$_POST['pwd1'];

if($uid=='chaitra' && $pwd=='1234')
{
	session_start();
	$_SESSION['sid']=session_id();
	
	header("location:securepage.php");
	
}
else
{
	echo "wrong password";
}
?>
