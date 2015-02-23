<?php
  Type ("Employee") -> where (function ($type) {
    $type -> derives (String);
    $type -> with    (["Programmer"
                     , "Boss"
                     , "DBA"        => "Database administrator"]);
  });

  # Type Dollars that derives Float and is Nothing() by default
  Type ("Dollars") -> derives (Float) -> def (Nothing ());

  $worker = Object ([
    $name     => String
  , $age      => Int
  , $salary   => Maybe (Dollars)
  , $position => Employee
  ]);

  $worker -> prototype -> greet = Lambda (
    function ($self) {
      Str ("Hello, I'm \(name) and I'm \(age) years old!")
      -> format (["name" => $self -> name
                , "age"  => $self -> age])
      -> putStrLn ();
    }
  );
  
  $worker -> prototype -> sayPosition = Lambda (
    function ($self) {
      Str ("I'm a \(0) here.") -> format ($self -> position)
      -> putStrLn ();
    }
  );

  $sophia = $worker -> instance ();
  # or:
  # $sophia = clone $worker;

  $sophia -> with ([
    "name"     => "Sophia J."
  , "age"      => 19
  , "salary"   => Just (3500)
  , "position" => Type (Employee) -> Programmer;
  ]);

  $sophia -> greet ();
  $sophia -> sayPosition ();
