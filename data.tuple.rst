.. _data.tuple:

==========
Data.Tuple
==========

The ``Tuple`` type is a different way of storing multiple values in a single value. The main differences between tuples and lists are that tuples have a fixed number of elements (immutable); therefore, it makes sense to use tuples when you known in advance how many values are to be stored. For example, we might want a type for storing 2D coordinates of a point. We known exactly how many values we need for each point (two - the x and y coordinates), so tuples are applicable. The elements of a tuple do not need to be all of the same type. For instance, in a phonebook application we might want to handle the entries by crunching three values into one: the name, phone number, and the address of each person. In such a case, the three values won't havve the same type, so lists wouldn't help, but tuples would.

----------
Operations
----------

.. function:: fst :: Tuple<a>(Int) -> Maybe a

Returns ``Just`` the first element of a tuple (if it exists), or ``Nothing``.

.. code-block:: php

  <?php
    Tuple (Str ("Hello"), Int (100)) -> fst (); # => Just (Str ("Hello"))

.. function:: get :: (Tuple, Int) -> Maybe a

Works like a 1-indexed array, where you get ``Just`` the element in the received index or ``Nothing``.

.. code-block:: php

   <?php
     Tuple (Int (10), Int (20)) -> get (Int (3)); # => Nothing
     Tuple (Int (10), Int (20)) -> get (Int (2)); # => Just (Int (2))

.. function:: snd :: Tuple<a, b>(Int) -> Maybe b

Returns ``Just`` the second element of a tuple (if it exists), or ``Nothing``.

.. code-block:: php

   <?php
     Tuple (Str ("Hello"), Int (100)) -> snd (); # => Just (Int (100))

.. function:: showType :: Tuple -> Str

Returns the type of the items contained in the tuples in format of a ``Data.Str``.

.. code-block:: php

   <?php
     Tuple (Str ("Hello"), Int (100)) -> showType ();
     # => Str ("Tuple<Data.Str, Data.Num.Int>(2)")

.. function:: swap :: Tuple -> Maybe Tuple

Swaps the values of a pair and returns `Just` the tuple or returns `Nothing` in case of not-a-pair.

.. code-block:: php

  <?php
    Tuple (Float (3.14), Int (34)) -> swap ();
    # => Just ( Tuple (Int (34), Float (3.14)))
    Tuple () -> swap (); # => Nothing
