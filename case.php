<?php

	$colmap = [3,2];
	$rowtotal = 3;
	$data = [];
	$seat = 1;

	for ($a=0; $a < 2; $a++) { 

		if ($a == 1) {
			$seat = 4;
		}

		for ($i=0; $i < $rowtotal ; $i++) { 
			for ($j=0; $j < $colmap[$a] ; $j++) { 

				$data[$a][$i][$j] = $seat;
				$seat++;
			}

			if ($a == 0) {
				$seat = $seat + 2;
			} else {
				$seat = $seat + 3;
			}
		}
	}

	print_r(json_encode($data));

?>