<?php
$n1=$_GET["num"];
//echo "$n1<br>";

if (preg_match('/^[0-9]+$/i', $n1))
{
goto a;
}
else
{
goto b;
}
a:echo"<br><br><center>";
echo"Enter grades in orderly fashion and continue to find your MO :P";
echo"</br></br></center>";
?>
<center>
<form action="mo.php" method="GET">
<?php
for($i=0;$i<$n1;$i++)
{
$w=$i+1;

?>lesson &nbsp; <?php echo "$w";?> &nbsp; <input type="text" name="lesson<?php echo"$w"; ?>" ><br><?php
}
?>

<input type="hidden" name="num1" value="<?php echo"$n1"; ?>">
<input type="submit" name="action2" value="continue">
</form>
</center>
<?php
goto c;
b:
?><form action="input_number.php"><?php
echo"<br><br><center>";
echo"<b>Fatal error</b>:The input must consist <u>only</u> by numeric characters.";
echo"</br></br>";
?><input type="submit" name="action3" value="Try Again"> <?php
echo"</center>";
?>
</form>
<?php c:?>

