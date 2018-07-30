<?php
function combine_arrays ($array1 , $array2)
{
    if ((!is_array($array1))||(!is_array($array2)))
    {
        return 999; //input not array
    }
    else
    {
		$ln1=count($array1);
		$ln2=count($array2);
		if($ln1!=$ln2)
		{ 
			return 99; // Array length missmatch.
		}
		$i=0;
		$N=$ln1;
		$S=2*$N;
		$array3 = array_fill(0, $S, NULL);
			for($x=0;$x<$N;$x++)
			{
				$array3[$i]=$array1[$x];$i++;
				$array3[$i]=$array2[$x];$i++;
			}
		return $array3;
	}
}
?> 
