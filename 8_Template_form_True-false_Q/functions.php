<?php  /*http://localhost/phpmyadmin*/

function verify_connection($host,$user,$pass,$db) {

    $con=mysql_connect($host,$user,$pass);
	if (!$con) {
		die('Not connected : ' . mysql_error());
		return false;
	}
	else{
		mysql_select_db($db);
		return true;
	}
	//return ();
}

function getQuery($select,$from1,$from2){
//select '".$select."' from '".$from."' where '".$where."'
	$query="select * from question_table where active='1'";
	$result=mysql_query($query);
	$i=1;$j=0;
	while ($row=mysql_fetch_array($result))
	{
		$qcode=$row["ai"];
		$array[$i][$j] = $qcode;$j=$j+1;
		$array[$i][$j] = $row["question"];$j=$j+1;
		$array[$i][$j] = $row["active"];$j=$j+1;
		$array[$i][$j] = $row["activationDate"];
		$i=$i+1;$j=0;
	}
	/*  =====================================================   */
	$query1="select * from answer_table where qcode='".$qcode."'";
	$result1=mysql_query($query1);	
	while ($row1=mysql_fetch_array($result1))
	{	$j=0;
		$array[$i][$j] = $row1["ai"];$j=$j+1;
		$array[$i][$j] = $row1["answer"];$j=$j+1;
		$array[$i][$j] = $row1["qcode"];$j=$j+1;
		$array[$i][$j] = $row1["status"];
		$i=$i+1;
	}

	$array['0']['0']=$i-1;
	$array['0']['1']=$j;
	return $array;
}

function dateformat() {

	$t=time();
	$dform=date("Y-m-d",$t);
	return $dform;
}
function GetMax(){

				
	$query="select MAX(ai) from question_table";
	$result=mysql_query($query);

	while ($row=mysql_fetch_array($result))
	{
		$id=$row["MAX(ai)"];
	}			
	return $id;
}
function GetMin(){

				
	$query="select MIN(ai) from question_table";
	$result=mysql_query($query);

	while ($row=mysql_fetch_array($result))
	{
		$id=$row["MIN(ai)"];
	}			
	return $id;
}
function check_changeQuestion($date){

	$query="select * from question_table where active='1'";
	$result=mysql_query($query);

	while ($row=mysql_fetch_array($result))
	{
		$id=$row["ai"];
		    $row["active"];
		$dateSet=$row["activationDate"];
	}
	if($dateSet!==$date){
		if($dateSet<$date){
			$query1 = "UPDATE question_table SET active='0' WHERE ai='".$id."'"; 
			mysql_query($query1);
			$num=$id+1;

			$max=GetMax(); $min=GetMin();  
			if($num>$max){ $num=$min; }

			$query2 = "UPDATE question_table SET active='1',activationDate='".$date."' WHERE ai='".$num."'"; 
			mysql_query($query2);
			/*if ($conn->query($sql) === TRUE) {
			$update=true;
			} else {
			$update=false;
			}*/
		}
		if($dateSet>$date){
		 /*ERROR*/
		}
	}
	else {
		//exit;
	}

}
?>