.. _data.either:

===========
Data.Either
===========

The ``Either`` type represents values with two possibilities: a value of type
``Either a b`` is either ``Left a`` or ``Right b``.
The ``Either`` type is sometimes used to represent a value which is either
correct or an error; by convention, the ``Left`` constructor is used to hold
an error value and the ``Right`` constructor is used to hold a correct value
(mnemonic: "right" also means "correct").

------------
Constructors
------------

* ``Data.Either.Left x``
* ``Data.Either.Right x``

----------
Operations
----------

.. function:: either :: (Either a b, Func, Func) -> c

Case analysis for the ``Either`` type. If the value is ``Left a``, apply the first function to a; if it is `Right b`, apply the second function to b.

.. code-block:: php

   <?php
     Either (null) -> either (
       # Left a
       function ($a) {
         return Int (0);
       },
       # Right b
       function ($b) {
         return Int ($b);
       });

.. function:: isLeft :: Either a b -> Bool

Return ``Bool (True)`` if the given value is a ``Left``-value, ``Bool (False)`` otherwise.

.. code-block:: php

  <?php
    Either (null) -> isLeft (); # Bool (True)

.. function:: isRight :: Either a b -> Bool

Return ``Bool (True)`` if the given value is a ``Left``-value, ``Bool (False)`` otherwise.

.. code-block:: php

  <?php
    Either (Int (10)) -> isRight (); # Bool (True)
