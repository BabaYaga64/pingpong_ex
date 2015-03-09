<?php

    require_once __DIR__.'/../src/PingPongGenerator.php';

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_printIntegers()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            $result = $test_PingPongGenerator->printOut($input);

            $this->assertEquals("1, 2, ", $result);
        }
    }


?>
