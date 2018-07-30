<?php session_start();
if($_SESSION['user']==""){
header("form_one.php");
}
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