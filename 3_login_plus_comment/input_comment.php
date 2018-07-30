<?php session_start();
$com=$_POST["com"];

$con=mysql_connect("localhost","root","");
mysql_select_db("w5");
if($com=="")
{ 
//echo"empty comment! try again";
?>
  <html>
<head>
<title></title>
</head>
<body>
<br>
</br>
<br>
</br>
<br>
</br>
<center>
<form method="POST" action="input_comment.php">
<H3><b>Empty comment! try again
<br></b></H3>
<br>
Comment: <br>
<textarea col="5" rows="5" name="com"></textarea>
<br>
<br>
<input type="submit" name="action" value="submit"> 
</form>
</center>

</body>
</html>
<?php
}
else
{
$query="INSERT INTO input_com(comment) values('$com')";
$result=mysql_query($query);
//echo"success. comment entered!";

?>

  <html>
<head>
<title></title>
</head>
<body>
<br>
</br>
<br>
</br>
<br>
</br>
<center>
<form method="POST" action="input_comment.php">
<H3><b>success. comment entered!
<br></b></H3>
<br>
<table>
<tr><td width="250"></td><td>
<H3><b>Enter New Comment
<br></b></H3>
<br>
Comment: <br>
<textarea col="5" rows="5" name="com"></textarea>
<br>
<br>
<input type="submit" name="action" value="submit"> 
</form>
</td><td width="200"></td><td>
<?php
$query="select * from input_com";
$result=mysql_query($query);

    echo "<table>";
        echo "<tr>";
            echo "<td width=50><h2>id</h2></td>";
            echo "<td width=400><h2>Comment</h2></td>";
        echo "</tr>";
    while($row=mysql_fetch_array($result))
    {
        echo "<tr>";
            echo "<td width=20>";
                echo $row["ID"];
            echo "</td>";
            echo "<td width=400>";
                echo $row["comment"];
            echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
</td><tr>
</table>
</center>

</body>
</html>

<?php

}
?>
