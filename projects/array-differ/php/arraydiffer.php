<?php
function array_differ(){
	$num=func_num_args();
	if($num<=0)
	throw new Exception("$num paramters given while array_differ function need 2 array as paramters at least");
	$lists=func_get_args();
	$U=array();
	foreach($lists as $k=>$v)
	{
		if($k==0)
		{
			$U=$v;
		}
		else
		{
			$a=$v;
			foreach($a as $ka=>$va)
			{
				while(!(($delkey=array_search($va,$U))===false))
				{
						unset($U[$delkey]);
				}
			}
		}
	}
	return $U;
}
?>