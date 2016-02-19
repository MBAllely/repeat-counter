<?php
class RepeatCounter
{
    function CountRepeats($input, $string)
    {
        $count = 0;
        $input = strtolower($input);
        $input = preg_replace('/[^a-z]/i', '', $input);
        $string = strtolower($string);
        $string = preg_replace('/[^a-z]/i', ' ', $string);
        $split_string = explode(" ", $string);
        foreach($split_string as $index => $word) {
            if ($split_string[$index] == $input) {
                $count += 1;
            }
        }
        return "Your word was '" . $input . "' and it appeared " . $count . " time(s).";
    }

}
?>
