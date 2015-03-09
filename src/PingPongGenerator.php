<?php

    class PingPongGenerator
    {
        function printOut($input_number)
        {
            $output = "";
            for ($i = 1; $i <= $input_number; $i++) {
                $output .= $i . ", ";
            };
            return $output;
        }
    }

?>
