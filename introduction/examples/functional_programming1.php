<?php
  $myList = § (1, '...', 10) -> of ("Data.Num.Int")
  -> map (Lambda (function (Int $n) { return $n -> times (Int (2)); }))
  -> filter (Lambda (function (Int $n) { return $n -> isEven (); })
  -> reduce ("+");
