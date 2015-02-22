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
   :linenos:

   <?php
     exemplo