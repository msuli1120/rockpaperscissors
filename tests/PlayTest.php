<?php
  require_once "src/Play.php";

  class PlayTest extends PHPUnit_Framework_TestCase {

    function testPlayRS () {
      //Arrange
      $test_play = new Play;
      $first_input = "rock";
      $second_input = "scissors";
      //Act
      $result = $test_play->playGame($first_input, $second_input);
      //Assert
      $this->assertEquals("Player 1 wins", $result);
    }

    function testPlayDraw () {
      //Arrange
      $test_play = new Play;
      $first_input = "rock";
      $second_input = "rock";
      //Act
      $result = $test_play->playGame($first_input, $second_input);
      //Assert
      $this->assertEquals("Draw", $result);
    }
  }
?>
