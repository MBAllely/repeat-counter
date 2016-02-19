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
            $this->assertEquals("Your word was 'the' and it appeared 1 time(s).", $result);
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
            $this->assertEquals("Your word was 'the' and it appeared 2 time(s).", $result);
        }

        function test_CountRepeats_Mixed_Case()
        {
            // Arrange
            $test_Count = new RepeatCounter;
            $input = "the";
            $string = "The wind in the willows";
            // Act
            $result = $test_Count->CountRepeats($input, $string);
            // Assert
            $this->assertEquals("Your word was 'the' and it appeared 2 time(s).", $result);
        }

        function test_CountRepeats_Mixed_Input_Case()
        {
            // Arrange
            $test_Count = new RepeatCounter;
            $input = "The";
            $string = "The wind in the willows";
            // Act
            $result = $test_Count->CountRepeats($input, $string);
            // Assert
            $this->assertEquals("Your word was 'the' and it appeared 2 time(s).", $result);
        }

        function test_CountRepeats_Partial_Match()
        {
            // Arrange
            $test_Count = new RepeatCounter;
            $input = "cat";
            $string = "Let's play catch with the cat";
            // Act
            $result = $test_Count->CountRepeats($input, $string);
            // Assert
            $this->assertEquals("Your word was 'cat' and it appeared 1 time(s).", $result);
        }

        function test_CountRepeats_Ignore_NonLetters()
        {
            // Arrange
            $test_Count = new RepeatCounter;
            $input = "cat";
            $string = "What a cute cat!";
            // Act
            $result = $test_Count->CountRepeats($input, $string);
            // Assert
            $this->assertEquals("Your word was 'cat' and it appeared 1 time(s).", $result);
        }
    }
 ?>
