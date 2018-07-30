<?php session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("db_products");
$basket=$_SESSION["basket"];
if ($basket=="")
{
$basket=array();
}
$id=$_GET["id"];
$size=sizeof($basket);
$basket[$size]=$id;
$_SESSION["basket"]=$basket;

for ($i=0;$i<=$size;$i++)
{
$query="select * from products where id=".$basket[$i];
$result=mysql_query($query);
//echo $query;
//echo $result;
echo "<table border='1'>";
while ($row=mysql_fetch_array($result))
{
	echo "<tr><td>";
	echo $row["id"];
	echo "</td><td>";
	echo $row["name"];
	echo "</td><td>";
	echo $row["price"];
	echo "</td><td>";
}
echo "</table>";
}
//$_SESSION["basket"]="";    katharismos tou session
?>