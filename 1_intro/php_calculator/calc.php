<?php
$n1=$_GET["num1"];
$n2=$_GET["num2"];
//echo"$n1";
//echo"$n2";
if (preg_match('/^[0-9\.]+$/i', $n1)&&preg_match('/^[0-9\.]+$/i', $n2))
{
goto a;
}
else
{
goto b;
}
a:
$add=$n1+$n2;
$min=$n1-$n2;
$mult=$n1*$n2;
if($n2==0)
{
$div="Error:a/b b=0";
}
else{
$div=$n1/$n2;
}
?>
<form action="enter.php">
<br></br><br></br>
<center>
<table><tr><td>

<?php echo"$n1";?> &nbsp; Plus &nbsp; <?php echo"$n2";?><br>           
<?php echo"$n1";?> &nbsp; Minus &nbsp; <?php echo"$n2";?></br>          
<?php echo"$n1";?> &nbsp; Multiplied by &nbsp; <?php echo"$n2";?><br>  
<?php echo"$n1";?> &nbsp; Divided by &nbsp; <?php echo"$n2";?></br>     
</td><td>
<input type="text" name="num1" value=" <?php echo"$add"; ?> "><br>
<input type="text" name="num2" value=" <?php echo"$min"; ?> "></br>
<input type="text" name="num3" value=" <?php echo"$mult"; ?> "><br>
<input type="text" name="num4" value=" <?php echo"$div"; ?> "></br>

</td></tr></table>
<br>
<input type="submit" name="action" value="Re-Calculate">
</br></center>
</form>
<?php
goto c;
b:
?>
<br></br><br></br>
<center>
<b>Error</b>:wrong input <b>try only numerics</b>.<br>
<form action="enter.php">
<input type="submit" name="action" value="Re-Try">
</form>
</center>
<?php
c:
?>