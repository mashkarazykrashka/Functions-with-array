<!DOCTYPE >
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Array</title>
  
</head>

<body>
<?php
function my_product_foreach($sort) 
{
	$sum=1;
	foreach ($sort as $value) 
		{
			$sum=$sum*$value;
		}
	return $sum;    
}

function my_product_for($sort) 
{
	$sum=1;
	for ($k=0; $k<count($sort); $k++) 
		{
			$sum=$sum*$sort[$k];
		}
	return $sum;    
}

function my_sum_foreach($sort) 
{
	$sum=0;
	foreach ($sort as $value) 
		{
			$sum=$sum+$value;
		}
	return $sum;    
}

function my_sum_for($sort) 
{
	$sum=0;
	for ($k=0; $k<count($sort); $k++) 
		{
			$sum=$sum+$sort[$k];
		}
	return $sum;    
}

function my_reverse($arr) 
{
	for ($i=0; $i<count($arr); $i++) 
		{
			$rev[]=$arr[$i];
		}
	return $rev;    
}

function my_search($arr,$x) 
{
	for ($i=0; $i<count($arr); $i++) 
		{
            if ($arr[$i]==$x) 
            {
                $key=$i;
            }
		}
	return $key;    
}

function my_in($arr,$x) 
{
    $ansver="FALSE";
	for ($i=0; $i<count($arr); $i++) 
		{
            if ($arr[$i]==$x) 
            {
                $ansver="TRUE";
            }
		}
	return $ansver;      
}

function my_array_key_exists($arr,$x) 
{
    $ansver="FALSE";
	for ($i=0; $i<count($arr); $i++) 
		{
            if ($i==$x) 
            {
                $ansver="TRUE";
            }
		}
	return $ansver;      
}

function my_flip($arr) 
{
	for ($i=0; $i<count($arr); $i++) 
		{
			$rev[$arr[$i]]=$i;
		}
	return $rev;    
}

function my_keys($arr) 
{
	for ($i=0; $i<count($arr); $i++) 
		{
			$rev[]=$i;
		}
	return $rev;    
}
?>
</body>

</html>