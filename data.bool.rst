.. _data.bool:

=========
Data.Bool
=========

A ``Bool`` type can hold two primitive values: ``True`` and ``False``. When starting designing Rawr, we decided to use ``True`` and ``False`` as constructors, in a Haskell-like way, but we would have great troubles with performance and capabilities, as much as simple logic-values would be an object, an instance of a class.

----------
Operations
----------

.. function:: and :: (Bool, Bool) -> Bool
   :module: Data\Bool

Main function