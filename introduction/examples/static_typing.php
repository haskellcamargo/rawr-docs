<?php
  $age = Int (18);
  $ableToDrive = Lambda (
    /** :: Int -> Bool */
    function (Int $age) {
      return $age -> greaterOrEq (18);
    }
  );
  
  $ableToDrive($age) -> inspect (); // Object (bool);
