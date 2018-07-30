<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("db_products");
$query="select * from products";
$result=mysql_query($query);

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
?>
<a href="basket_cj.php?id=<?php echo $row['id'];?>">ADD</a>
</br>	
<?php
}
?></table>
