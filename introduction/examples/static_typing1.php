<?php
  $sqrtOf = Lambda (
    /** :: Num -> Float */
    function (Num $n) { return $n -> sqrt (); }
  );
