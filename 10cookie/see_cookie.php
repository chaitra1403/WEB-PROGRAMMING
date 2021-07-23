<?php
$inTwomonth=60*60*24*60+time();
setcookie('lastvisit',date("G:i - d/m/y"),$inTwomonth);
if(isset($_COOKIE['lastvisit']))
{
	$visit=$_COOKIE['lastvisit'];
	echo "Your last visit was ",$visit;
	echo "<br>";
}
else
{
	echo "You have got some state cookie";

}
session_start();
if(isset($_SESSION['views']))
{
	$_SESSION['views']=$_SESSION['views']+1;
}
else
{

	$_SESSION['views']=1;

}
	echo "views=".$_SESSION['views'];
	echo "<br>";
	echo "Reload the page to increment count";

?>
