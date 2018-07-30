<?php
$name=$_POST["usr"];
$pass=$_POST["pas"];

$con=mysql_connect("localhost","root","");
mysql_select_db("w5");
$query="select * from users where name='$name'";
$result=mysql_query($query);
if(mysql_num_rows($result)==0)
{
echo"Error";
}
else{
echo"OK move on";
}
?>