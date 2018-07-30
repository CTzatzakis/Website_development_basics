<?php /* ΓΕΠ ΔΕΑ © */
include 'functions.php';
$flag=verify_connection("localhost","root","","wise_q");
/*if($flag)
{
echo $flag;
}*/
$dateInput=dateformat();
check_changeQuestion($dateInput);
$array=getQuery("*","question_table","answer_table"); 
?>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="favicon.ico" type="image/ico" sizes="16x16">
		<script>
			function showCorrect(y,x)
			{
				if(x==1)
				{
					document.getElementById("correct").style.display="block";
					document.getElementById("notCor").style.display="none";
					document.getElementById(y).style.background="#18FB3A";
					document.getElementById("button").style.display="block";
				}
				else
				{
					document.getElementById("correct").style.display="none";
					document.getElementById("notCor").style.display="block";
					document.getElementById(y).style.background="#FB2318";
					document.getElementById("button").style.display="none";
				}
			}
	
		</script>	
		<style>
		#gep {
				position: fixed;
				bottom: 30;
				right: 30;
			}
		</style>		
	</head>
	<body>
		<table style="width:100%;height:100%;background-color:#00046F;border-style:double; border-width:8px"><tr><td>
		<table style="width:100%;height:100%;background-color:white;border-width:0;border-radius:2%">
		<tr style="height:10%;">
			<td >
				<img src="ico.png" style="height:60px;float:left;"> <br/><div style="float:right;"><i> Current Date: <?php echo dateformat(); ?></i></div><div style="">[Some Title/Name]</div>  
			</td>
		</tr>
		<tr style="height:3%;">
			<td style="background-color:#00046F;">

			</td>
		</tr>
		<tr style="height:%;"><td>
		<center>
			<div> True/False question of the day.  </div>
			<form method="POST" action="https://www.youtube.com/"> <!-- Chose action, example action="https://www.youtube.com/"-->
			
				<p style="max-width:600px;background-color:#E0E0E0;"><?php if((!$array['1']['1']==NULL)&&(!$array['1']['1']=="")){ echo $array['1']['1']; }else {echo "No question available.";}?></p><!-- Q variable -->
			<?php
			for ($x = 2; $x <= $array['0']['0']; $x++) {
			?>
				<div onclick="showCorrect('<?php echo $x ?>','<?php echo $array[$x]['3'] ?>');">
					<p id="<?php echo $x; ?>" style="max-width:600px;background-color:#E0E0E0;cursor: pointer;text-align: left">&nbsp;<?php echo $x-1;?>) &nbsp;&nbsp;&nbsp;<?php echo $array[$x]['1']; ?><br/></p>
				</div>
			<?php
			} 
			?>
			
			<div id="correct"style="display:none">True</div>
			<div id="notCor"style="display:none">False</div>			
			<input style="display:none" id="button" type="submit" name="action" value="Go to [...]">
			
			</form>
		</center><div id="gep"> <b>[Office]  </b> [Director] &#169;</div>
		</td>
		</tr>
		</table> 
		</td></tr></table>
	</body>
</html>