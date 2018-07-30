<?
function fibonacci($n) {
    if (!is_int($n))
    {
        return 999; //input not intiger
    }
    else
    {
        if($n>=2)
		{
			$count = 0 ;
			$f1 = 0;
			$f2 = 1;
			//if ($n==0){	$array[0]=$f1;};
			//if ($n>=1){	$array[0]=$f1;$array[1]=$f2;};
			while ($count < $n-1 )
			{
				$f3 = $f2 + $f1 ;
				$array[$count+2]=$f3;
				$f1 = $f2 ;
				$f2 = $f3 ;
				$count = $count + 1;
			}  
			return $array;	
		}
		else return 9;//input lesser than 2
    }


}
?>