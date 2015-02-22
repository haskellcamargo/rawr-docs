<?php
  $oddNumTil100 = (new Collection (1, 3 '...', 100)) -> of ("Data.Num.Int")
  -> filter (Lambda (function (Int $n) { return $n -> greaterOrEq (50); }))
  -> each   (Lambda (function (Int $n) { Show ($n) -> putStrLn (); }));

  $magicHappens = $oddNumTil100 -> contains (Int (7))
  -> ifTrue (Lambda (function () { Str ("Yes, it containts 7.") -> putStrLn (); }))
  -> ifFalse (Lambda (function () { Str ("No, there is no 7.") -> putStrLn (); }));