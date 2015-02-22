.. _data.maybe:

==========
Data.Maybe
==========

A ``Maybe`` type encapsulates an optional value. A value of type ``Maybe a`` either contains a value of type a (represented as ``Just a``), or it is empty (represented as ``Nothing``). Using ``Maybe`` is a good way to deal with errors or exceptional cases without resorting to drastic measures such as ``Data.Error``.

The ``Maybe`` type is also a monad. It is a simple kind of error monad, where all errors are represented by ``Nothing``. A richer error monad can be built using the ``Either`` (``Data.Either``) type. 

------------
Constructors
------------

* ``Data.Maybe.Just t``
* ``Data.Maybe.Nothing``

----------
Operations
----------

.. function:: bind :: (Maybe a, Func) -> Maybe b

Equivalent to Haskell's ``>>=`` operator. Its first argument is a value in a monadic type, its second argument is a function that maps from the underlying type of the first argument to another monadic type, and its results is in that other monadic type.

.. code-block:: php

  <?php
    $age = Maybe (Int (18));
    $age 
    -> bind (function ($val) {
         return $val -> inc ();
       }) 
    -> bind (function ($val) {
         return $val -> inc ();
       }); # => Maybe Int (20)

.. function:: fromJust :: Maybe a -> a

Extracts the element out of a ``Just`` and returns an error if its argument is ``Nothing``.

.. code-block:: php
  <?php
    Maybe (Float (3.14))
    -> fromJust (); # => Float (3.14)

.. function:: isJust :: Maybe a -> Bool

Returns ``Bool (True)`` if its argument is of the form ``Just _``.

.. code-block:: php

  <?php
    $name = Just (10);
    $name -> isJust (); # => Bool (True);