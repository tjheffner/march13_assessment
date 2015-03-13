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

 ?>
