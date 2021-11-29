<?php
	function number_convert($n,$from,$to){
		if($from == 'decimal'){
			switch($to){
				case 'binary':
					$binaryNum;
		    		$i = 0;
		    		while ($n > 0)
		    		{
		        		$binaryNum[$i] = $n % 2;
		        		$n = (int)($n / 2);
		        		$i++;
		    		}
		    		for ($j = $i - 1; $j >= 0; $j--){
		        		echo $binaryNum[$j];
		    		}
		    		echo "</br>";

		        case 'octal':
					$octalNum;
		    		$i = 0;
		    		while ($n > 0)
		    		{
		        		$octalNum[$i] = $n % 8;
		        		$n = (int)($n / 8);
		        		$i++;
		    		}
		    		for ($j = $i - 1; $j >= 0; $j--){
		        		echo $octalNum[$j];
		    		}
			}
		}
	}
 number_convert(42,'decimal','binary');
 number_convert(42,'decimal','octal');
?>