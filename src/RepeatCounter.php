<?php
class RepeatCounter
{
    function CountRepeats($input, $string)
    {
        $count = 0;
        $split_string = explode(" ", $string);
        foreach($split_string as $index => $word) {
            if ($split_string[$index] == $input) {
                $count += 1;
            }
        }
        return $count;
    }

}
?>
