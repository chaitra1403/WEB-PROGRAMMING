<?php
echo "weelcome".$_POST["username"];
switch($_POST["bcolor"])
{
	case "red":
			$strcolor="rgb(255,0,0)";
			break;
	case "green":
			$strcolor="rgb(0,255,0)";
			break;
	case "blue":
			$strcolor="rgb(0,0,255)";
			break;
	default:
			$strcolor="rgb(255,255,255)";
			break;
}
?>
<html>
<body style="background:<?php echo $strcolor; ?>;">
</body>
</html>

