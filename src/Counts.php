<?php

  class RepeatCounter
  {
    function countRepeats($input1, $input2)
    {
        $counter = 0;
        $sentence = explode(" ", $input2);

        if (in_array($input1, $sentence)) {
          $counter++;
        }

        return $counter;
    }

  }

 ?>
