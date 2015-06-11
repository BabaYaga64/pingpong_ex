<?php

    class PingPongGenerator
    {
        function ping_pong($count_max) {
	    $output_array = [];
	        for ($i = 1; $i <= $count_max; $i++) {
		        if ($i % 5 == 0 && $i % 3 == 0) {
			        array_push($output_array, "Ping-Pong");
		        } elseif ($i % 5 == 0) {
			        array_push($output_array, "Ping");
		        } elseif ($i % 3 == 0) {	
			        array_push($output_array, "Pong");
		        } else { array_push($output_array, $i);	
		        } return $output_array;
            }
        }
    }

?>
