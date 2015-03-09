<?php

    class PingPongGenerator
    {
        function printOut($input_number)
        {
            $output = "1";

            for ($i = 2; $i <= $input_number; $i++) {
                if ($i % 3 == 0) {
                    $output .= ", Ping";
                } else {
                    $output .= ", " . $i;
                };
            };
            return $output;
        }
    }

?>
