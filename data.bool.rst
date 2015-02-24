.. _data.bool:

=========
Data.Bool
=========

A ``Bool`` type can hold two primitive values: ``True`` and ``False``. When starting designing Rawr, we decided to use ``True`` and ``False`` as constructors, in a Haskell-like way, but we would have great troubles with performance and capabilities, as much as simple logic-values would be an object, an instance of a class.

----------
Operations
----------

.. function:: _and :: (Bool, Bool) -> Bool

Returns ``Bool (True)`` if both the value of the object and the value of the received expression are true. Otherwise, false.

.. code-block:: php

   <?php
     Bool (True) -> _and (Bool (False)); # => Bool (False)
     Bool (True) -> _and (Bool (True));  # => Bool (True)

.. function:: _or :: (Bool, Bool) -> Bool

Returns ``Bool (True)`` if any of the values, of the object, or of the received expression, are true. Otherwise, false.

.. code-block:: php

   <?php
     Bool (False) -> _or (Bool (True));  # => Bool (True)
     Bool (False) -> _or (Bool (False)); # => Bool (False)

.. function:: diff :: (Bool, Bool) -> Bool

Comparison of the difference of two objects or values of **same** type.

.. code-block:: php

   <?php
     Bool (True) -> diff (Bool (True));  # => Bool (False)
     Bool (True) -> diff (Bool (False)); # => Bool (True)

.. function:: eq :: (Bool, Bool) -> Bool

Comparison of the equality of two objects or values of **same** type.

.. code-block:: php

   <?php
     Bool (True) -> diff (Bool (True));  # => Bool (True)
     Bool (True) -> diff (Bool (False)); # => Bool (False)

.. function:: greaterOrEq :: (Bool, Bool) -> Bool

Returns if the value of this object is greater or equal to the received value.

.. code-block:: php

    <?php
      Bool (True) -> greaterOrEq (Bool (False)); # => Bool (True)

.. function:: greaterThan :: (Bool, Bool) -> Bool

Returns if the value of this object is greater than the received value.

.. code-block:: php

  <?php
    Bool (False) -> greaterThan (Bool (True)); # => Bool (False)

.. function:: ifTrue :: (Bool, Func) -> Bool

The closure passed as parameter is called if the value of this object is ``Bool (True)``. After, it returns the value by itself to allow method-chaining.

.. code-block:: php

  <?php
    Bool (True) -> ifTrue (Lambda (function () {
      Str ("Pass") -> putStrLn ();
    })); # => Bool (True)

.. function:: ifFalse :: (Bool, Func) -> Bool

the closure passed as parameter is called if the value of this object is ``Bool (False)``. After, it returns the value by itself to allow method-chaining.

.. code-block:: php

  <?php
    Bool (False) -> ifFalse (Lambda (function () {
      Str ("None") -> putStrLn ();
    })); # => Bool (False)

.. function:: lesserOrEq :: (Bool, Bool) -> Bool

Returns if the value of this object is lesser or equal to the received value.

.. code-block:: php

  <?php
    Bool (False) -> lesserOrEq (Bool (True)); # => Bool (True)

.. function:: lesserThan :: (Bool, Bool) -> Bool

Returns if the value of this object is lesser than the received value.

.. code-block:: php

  <?php
    Bool (True) -> lesserThan (Bool (False)); # => Bool (False)

.. function:: not :: Bool -> Bool

Reverses the value of a boolean object.

.. code-block:: php

  <?php
    Bool (True) -> not ();  # => Bool (False)
    Bool (False) -> not (); # => Bool (True)

.. function:: otherwise :: Bool -> Bool

Alias for ``ifFalse``.

.. code-block:: php

  <?php
    Bool (True)
    -> ifTrue (Lambda (function () {}))
    -> otherwise (Lambda (function () {})); # Bool (True)

.. function:: thenElse :: (Bool, Func, Func) -> Bool

Equivalent to ``ifTrue`` and ``ifFalse``.

.. code-block:: php

  <?php
    Bool (False)
    -> thenElse (
      Lambda (function (/* Then */) {
        Str ("...") -> putStrLn ();
      })
    , Lambda (function (/* Else */) {
        Str ("!!!") -> putStrLn ();
      })
    ); # Bool (True)
