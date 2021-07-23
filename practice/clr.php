<?php
$a=$_POST['txt'];
echo "welcome ".$a;
$b=$_POST['btn'];
switch($b)
{
	case "red":$c=rgb(255,0,0);
			break;
case "green":$c=rgb(0,255,0);
			break;
case "blue":$c=rgb(0,0,255);
			break;
default:$c=rgb(255,255,255);
	break;
}
?>
<html>
<body style="background:<?php echo $c;?>;">
</body>
</html>
