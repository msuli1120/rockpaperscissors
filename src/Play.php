<?php
  class Play {



    function playGame ($input_one, $input_two) {
      $player_one = array ("rock", "scissors", "paper");
      $player_two = array ("rock", "scissors", "paper");

      $one = strtolower($input_one);
      $two = strtolower($input_two);

      if(($one === $player_one[0])&&($two === $player_two[1])){
        return "Player 1 wins";
      } elseif (($two === $player_two[0])&&($one === $player_one[1])) {
        return "Player 2 wins";
      } elseif (($one === $player_one[0])&&($two === $player_two[2])) {
        return "Player 2 wins";
      } elseif (($two === $player_two[0])&&($one === $player_one[2])) {
        return "Player 1 wins";
      } elseif (($one === $player_one[1])&&($two === $player_two[2])) {
        return "Player 1 wins";
      } elseif (($one === $player_one[2])&&($two === $player_two[1])) {
        return "Player 2 wins";
      } elseif ($one === $two) {
        return "Draw";
      } else {
        return "Please enter 'rock' 'scissors' or 'paper'.";
      }
    }

    function playPC($input_one) {
      $player_one = array ("rock", "scissors", "paper");
      $pc = array ("rock", "scissors", "paper");

      $one = strtolower($input_one);
      $rand = $pc[array_rand($pc)];

      if(($one === $player_one[0])&&($rand === "scissors")){
        return "Player 1 wins. PC: scissors";
      } elseif (($rand === "rock")&&($one === $player_one[1])) {
        return "PC wins. PC: rock";
      } elseif (($one === $player_one[0])&&($rand === "paper")) {
        return "PC wins. PC: paper";
      } elseif (($rand === "rock")&&($one === $player_one[2])) {
        return "Player 1 wins. PC: rock";
      } elseif (($one === $player_one[1])&&($rand === "paper")) {
        return "Player 1 wins. PC: paper";
      } elseif (($one === $player_one[2])&&($rand === "scissors")) {
        return "PC wins. PC: scissors";
      } elseif ($one === $rand) {
        return "Draw. PC: " . $rand;
      } else {
        return "Please enter 'rock' 'scissors' or 'paper'.";
      }





    }
  }
?>
