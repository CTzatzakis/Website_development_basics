<?php
$n1=$_GET["num1"];
//echo"$n1";
for($i=0;$i<$n1;$i++)
{
$w=$i+1;
//echo"<br>$w</br>";
$info=$_GET["lesson".$w];

if (preg_match('/^[0-9]+$/i', $info))
{
goto a;
}
else
{
goto b;
}
a:
if($info>10||$info<0)
{
goto b;
}
$sum+=$info;
//echo"$sum";
}
$mo=$sum/$n1;
echo"<br></br><br></br><center>";
echo"The Average grade from the lessons entered is:";
echo"$mo";
echo"</center>";


goto c;
?>
<?php
b:
?>
<form action="lessons.php">
<br></br><br></br><center>
<?php
echo"Wrong input you weed! ..try again!";
echo"<br>";
echo"Enter only numeric characters from 0 to 10.";
?>
<br><input type="hidden" name="num" value="<?php echo"$n1"; ?>">
<input type="submit" name="action4" value="Enter Grades">
</br></center>
</form>
<?php
c:
?>