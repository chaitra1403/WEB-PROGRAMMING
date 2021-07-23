<!DOCTYPE html>
<html>
<body>
<?php
echo("</br>write operation</br>");
$myfile=fopen("temp.txt","w");
$wrd="RV college";
fwrite($myfile,$wrd);
echo("written===>$wrd</br>");
fclose($myfile);


$filename="temp.txt";
echo "</br>file reading  open";
$file=fopen("$filename","r");
if($file==false)
{
	echo("error in reading");
	exit();
}
else
{
	$filesize=filesize($filename);
	$filetxt=fread($file,$filesize);
	fclose($file);
	echo("</br>filesize=".$filesize."bytes");
	echo("<pre>".$filetxt."</pre>");
}
fclose($myfile);

echo("append</br>");
$myfile=fopen("temp.txt","a");
$wrd="HI!!! welcome to youuuuu";
$a=fwrite($myfile,$wrd);
echo $a;
echo("</br>append--->$wrd</br>");

echo("</br>GET CONTENTS</br>");
$wrd=file_get_contents("temp.txt");
echo "contents===>$wrd</br>";
fclose($myfile);
?>
</body>
</html>

