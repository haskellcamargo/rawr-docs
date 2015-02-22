<?php
  $numberOne  = Int (1);
  $numberZero = Int (0);
  # Here operation can be Just _ or Nothing.
  $operation  = Maybe ($numberOne -> div ($numberZero));

  # Applying identity and chaining computations as much as "programmable semicolons".
  $operation -> bind (function (Int $res) { return $res });

  # enum Maybe<T> { Just<T>, Nothing }
  Match ($operation) -> withConstr ([
    "Data.Maybe.Just x"  => function ($x) { Str ("We got a result: \(0).") -> format ($res -> fromJust ()) -> putStrLn (); }
  , "Data.Maybe.Nothing" => function () { Str ("Operation failure.") -> putStrLn (); }
  ]);

  $eitherOperation = Either ($numberOne -> div ($numberZero));
  $eitherOperation -> either (
    function ($_) { Str ("Error. Division by 0."); }
  , function (Int $x) { Str ("Value: \(0)") -> format ($x) -> putStrLn (); }
  );

  # enum Either<T> { Left<T>, Right<T> }
  Match ($eitherOperation) -> withConstr ([
    "Data.Either.Right x" => function ($x) { Str ("Value: \(0)") -> format ($x -> val ()) -> putStrLn (); }
  , otherwise             => function () { Str ("Error. Division by 0."); }
  ]);