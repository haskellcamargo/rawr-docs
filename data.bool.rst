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