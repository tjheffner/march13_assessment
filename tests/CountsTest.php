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

    function test_countRepeats_compoundWord()
    {
      //Arrange
      $test_Counts = new RepeatCounter;
      $input1 = 'cat';
      $input2 = 'the cat was my favorite part of catdog';

      //Act
      $result = $test_Counts->countRepeats($input1, $input2);

      //Assert
      $this->assertEquals(1, $result);

    }

    function test_countRepeats_caseProof()
    {
      //Arrange
      $test_Counts = new RepeatCounter;
      $input1 = 'cat';
      $input2 = 'The Cat in the Hat';

      //Act
      $result = $test_Counts->countRepeats($input1, $input2);

      //Assert
      $this->assertEquals(1, $result);

    }

    function test_countRepeats_punctuation()
    {
      //Arrange
      $test_Counts = new RepeatCounter;
      $input1 = 'cat';
      $input2 = 'that guy is a cool cat.';

      //Act
      $result = $test_Counts->countRepeats($input1, $input2);

      //Assert
      $this->assertEquals(1, $result);

    }

  }

 ?>
