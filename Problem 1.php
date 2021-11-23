<?php
	function greatestNum($x, $y, $z)
	{
		if ($x>$y && $x>$z)
		{
 			echo "$x is the greatest!";
		}
 		elseif ($y>$x && $y>$z)
 		{
 			echo "$y is the greatest!";
		}
		else
		{
 			echo "$z is the greatest!";
		}
	}
	greatestNum(100,10,50);
?>