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

.. function:: fromMaybe :: (Maybe a, a) -> a

Takes a ``Maybe`` value and a default value. If the ``Maybe`` is ``Nothing``, it returns the default values; otherwise, it returns the value contained in the ``Maybe``.

.. code-block:: php
   
   <?php
     Maybe (null)
     -> maybe (Str ("Pass")); # => Str ("Pass")

.. function:: isJust :: Maybe a -> Bool

Returns ``Bool (True)`` if its argument is of the form ``Just _``.

.. code-block:: php

  <?php
    $name = Just (10);
    $name -> isJust (); # => Bool (True)

.. function:: isNothing :: Maybe a -> Bool

Returns ``Bool (True)`` if its arguments is of the form ``Nothing``.

.. code-block:: php

  <?php
    $name = Nothing ();
    $name -> isNothing (); # => Bool (True)

.. function:: maybe :: (Maybe a, b, Func) -> b

Takes a default value, a function and, of course, a ``Maybe`` value. If the ``Maybe`` value is ``Nothing``, the function returns the default value. Otherwise, it applies the function to the value inside the ``Just`` and returns the result.

.. code-block:: php

  <?php
    Maybe (null)
    -> maybe (Int (10), Lambda (function (Int $just) {
      return $just -> sqrt ();
    })); # => Int (10);

.. function:: toList :: Maybe a -> Collection

Returns an empty list when given ``Nothing`` or a singleton list when not given ``Nothing``.

.. code-block:: php

  <?php
    Nothing ()
    -> toList (); # Collection ([])
    Just (Int (1))
    -> toList (); # Collection ([1]) of Int
