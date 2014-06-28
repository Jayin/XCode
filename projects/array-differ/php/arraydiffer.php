<?php
function array_differ(){
	try{
		$num=func_num_args();
		$e=new Exception("$num paramters  given while array_differ function need 2 array as paramters at least");
		$not_array_exception=new  Exception("all paramters of function array_differ should be array");
		if($num<=0)
			throw $e;
		$lists=func_get_args();
		$U=array();
		foreach($lists as $k=>$v)
		{
			if(!is_array($lists[$k]))
				throw $not_array_exception;
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
	catch(Exception $e)
	{
		echo $e->getMessage()." in file ".__FILE__." in line ".$e->getLine();
		exit;
	}
}
?>