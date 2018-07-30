<?php session_start();
$name=$_POST["usr"];
$pass=$_POST["pas"];

$con=mysql_connect("localhost","root","");
mysql_select_db("w5");
$query="select * from users where name='$name'";
$result=mysql_query($query);
if(mysql_num_rows($result)==0)
{
//echo"Error";
$_SESSION['user']="";
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
<form method="POST" action="login.php">
<H3><b>Error!!
<br>Try again!</b></H3>
<br>
UseRNamE <input type="text" name="usr">
<br>
PasSWorD<input type="password" name="pas">
<br>
<input type="submit" name="action" value="continue">
</form>
</center>

</body>
</html>
<?php
}
else{
echo"OK move on";
$_SESSION['user']=$name;
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
<H3><b>Enter your comment
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
?>