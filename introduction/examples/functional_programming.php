<?php
  $multiplyTwo = Lambda (
    /** :: Int -> Int */
    function (Int $n) {
      return $n -> times (2);
  });
  
  $multiplyThree = Lambda (
    /** :: Int -> Int */
    function (Int $n) {
      return $n -> times (3);
  });
  
  $multiplySix = $multiplyTwo -> o ($multiplyThree);
  $multiplySix(Int (7)) -> toString () -> putStrLn (); // => 42
