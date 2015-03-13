<?php

  require_once "src/Counts.php";

  class CountsTest extends PHPUnit_Framework_TestCase
  {

    function test_countRepeats_oneletter()
    {
      //Arrange
      $test_Counts = new RepeatCounter;
      $input1 = 'a';
      $input2 = 'a dog';

      //Act
      $result = $test_Counts->countRepeats($input1, $input2);

      //Assert
      $this->assertEquals(1, $result);

    }

    function test_countRepeats_onelettertwice()
    {
      //Arrange
      $test_Counts = new RepeatCounter;
      $input1 = 'a';
      $input2 = 'a cat and a dog';

      //Act
      $result = $test_Counts->countRepeats($input1, $input2);

      //Assert
      $this->assertEquals(2, $result);

    }


        function test_countRepeats_twoletter()
        {
          //Arrange
          $test_Counts = new RepeatCounter;
          $input1 = 'to';
          $input2 = 'to infinity and beyond';

          //Act
          $result = $test_Counts->countRepeats($input1, $input2);

          //Assert
          $this->assertEquals(1, $result);

        }

  }

 ?>
