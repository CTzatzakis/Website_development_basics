<?php
function add_for($a)
{
    $sum=0;
    $aln=count($a);
    for($x=0;$x<$aln;$x++)
    {
        $sum=$sum+$a[$x];
    }
    return(isset($sum) ? $sum : false);
}
function add_while($a)
{
    $count=0;$sum=0;
    $aln=count($a);
    while( $count < $aln)
    {
        $sum=$sum+$a[$count];
        $count++;
    }
    return(isset($sum) ? $sum : false);
}
function add_recursive($sum,$count,$lenght,$array)
{
	
	$sum=$sum+$array[$count];
	$count++;

    if($count <= $lenght)
    {
		return add_recursive($sum,$count,$lenght,$array);
    }
	else
	{
		return(isset($sum) ? $sum : false);
	}
}
?>