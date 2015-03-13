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

  }

 ?>
