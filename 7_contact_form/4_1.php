<html>
<head>
<script>
function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 
function validateForm() {
    var x = document.forms["contactform"]["first_name"].value;
	var regex=/^[a-zA-Z]+$/;
	var errors = []; 

    if (x == null || x == "" || !x.match(regex)) {
		x=false;errors.push("first_name");
		//document.getElementById("first_name").style.borderColor = "red";
    }
		var a = document.forms["contactform"]["last_name"].value;
	if (a == null || a == "" || !a.match(regex)) {
		a=false;errors.push("last_name");
		//document.getElementById("last_name").style.borderColor = "red";
    }
	
	var b = document.forms["contactform"]["email"].value;
	if (b == null || b == "" || validateEmail(b)==false){
		b=false;errors.push("email");
		//document.getElementById("email").style.borderColor = "red";
	}
	
	var c = document.forms["contactform"]["telephone"].value;
	if (c == null || c == "" || isNaN(c)) {
		c=false;errors.push("telephone");
		//document.getElementById("telephone").style.borderColor = "red";
    }
	
	var d = document.forms["contactform"]["comments"].value;
	if (d == null || d == "" || !d.match(regex)) {
		d=false;errors.push("comments");
		//document.getElementById("comments").style.borderColor = "red";
    }
	
	var e = document.forms["contactform"]["termsofuse"].value; 
	if (!document.getElementById("termsofuse").checked) {
		e=false;errors.push("termsofuse");
		//document.getElementById("termsofuse").style.borderColor = "red";
    }
	if(errors.length > 0 ){var fields="";
        for(var i=0;i<errors.length;i++){
          document.getElementById(errors[i]).style.borderColor = "red";
		  fields=fields." ".errors[i];
         }
		 alert(fields);alert("U got errors..marked by red border. \n Fix them to procede.");
         return false;
     }else{
		 document.getElementById("myForm").action = "4_2.php";
		 document.getElementById("myForm").submit;
       return true;
     } 

}
</script>
</head>
<body>

<form name="contactform" method="post"  onsubmit="4_2.php" action = "4_2.php">
 
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 
 <td valign="top">
  <input  type="text" name="first_name" id="first_name" maxlength="50" size="30">
 </td>
</tr>

<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 
 <td valign="top">
  <input  type="text" name="last_name" id="last_name" maxlength="50" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="email">Email Address *</label> 
 </td>
 
 <td valign="top">
  <input  type="text" name="email" id="email" maxlength="80" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="telephone">Telephone Number *</label>
 </td>
 
 <td valign="top">
  <input  type="text" name="telephone" id="telephone" maxlength="30" size="30">
 </td>
</tr>
 
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 
 <td valign="top">
  <textarea  name="comments"  id="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
 
<tr>
 <td valign="top">
  <label for="comments">Terms of Use *</label>
 </td>
 
 <td valign="top">
  <input  type="checkbox" name="termsofuse" id="termsofuse">
 </td>
</tr>

<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" onclick="return validateForm();" value="Submit">
 </td>
</tr>
</table>
 
</form>



</body>
</html>