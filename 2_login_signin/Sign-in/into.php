<?php
$name=$_POST["usr"];
$pass=md5($_POST["pas"]);
$mail=$_POST["mail"];

$con=mysql_connect("localhost","root","");
mysql_select_db("w5");

$query1="select * from users where name='$name'";
//echo $query;
$result1=mysql_query($query1);
if(mysql_num_rows($result1)!=0)
{
echo"The data you entered found  double.. try again";
?>
<form action="insert.php">
<input type="submit" name="action" value="continue">
</form>
<?php
}

else if(mysql_num_rows($result1)==0)
{

$query="INSERT INTO users(name,pas,mail) values('$name','$pass','$mail')";

$result=mysql_query($query);
$query="select * from users where name='$name'";
$result=mysql_query($query);
if(mysql_num_rows($result)==0)
{
echo"try again";
?>
<form action="insert.php">
<input type="submit" name="action" value="continue">
</form>
<?php
}
else{
echo"OK, thank you for your time";
}

}
?>
