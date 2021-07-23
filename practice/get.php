<?php
	$b=$_POST['txt1'];
	echo "welcome ".$b;
	switch($_POST['c1'])
	{
		case 'red': $x=rgb(225,0,0);
				break;
		case 'blue': $x=rgb(0,225,0);
                                break;
		case 'blue': $x=rgb(0,0,225);
                                break;
		default: $x=rgb(225,225,225);
				break;
	}
?>

<html>
<head></head>
<body style="background:<?php echo $x ?>";>
</body>
</html>
