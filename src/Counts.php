<?php

  class RepeatCounter
  {
    function countRepeats($input1, $input2)
    {
        $counter = 0;
        $sentence = explode(" ", $input2);

        $word_count = array_count_values($sentence);

          if (in_array($input1, $sentence)) {
            $counter = $word_count[$input1];
          }

        return $counter;
    }

  }

 ?>
