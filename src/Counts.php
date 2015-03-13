<?php

  class RepeatCounter
  {
    function countRepeats($input1, $input2)
    {
        $counter = 0;
        $input2 = trim(preg_replace( "/[^0-9a-z]+/i", " ", $input2 ));
        $input2lc = strtolower($input2);
        $sentence = explode(" ", $input2lc);

        $word_count = array_count_values($sentence);

          if (in_array($input1, $sentence)) {
            $counter = $word_count[$input1];
          }

        return $counter;
    }

  }

/*
  What this function does is take the sentence ($input2) and first replaces any
  thing that isn't a number or letter, i.e. all special characters or punctuation,
  with a space.

  That updated string is converted to all lowercase to account for any
  weird entries. Then we explode the string on spaces, giving each word a separate value.
  Sometimes a blank value will be returned in the array, due to how explode interprets
  double spaces, which will sometimes occur due to our preg_replace converting all
  special characters to spaces. This is irrelevant for the code however, because we
  are not searching for blank spaces, we are searching for a word ($input1).

  The array_count_values turns our exploded array into a new array, where each word is
  assigned a value according to the number of times it appears.

  All we need to do is return the value of our word in that final array.

*/

 ?>
