<?php
    require_once __DIR__ . '/../src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_CountRepeats_Once()
        {
            // Arrange
            $test_Count = new RepeatCounter;
            $input = "the";
            $string = "Any way the wind blows";
            // Act
            $result = $test_Count->CountRepeats($input, $string);
            // Assert
            $this->assertEquals(1, $result);
        }

        function test_CountRepeats_Multiple()
        {
            // Arrange
            $test_Count = new RepeatCounter;
            $input = "the";
            $string = "So the man ate the sandwich";
            // Act
            $result = $test_Count->CountRepeats($input, $string);
            // Assert
            $this->assertEquals(2, $result);
        }
    }
 ?>
