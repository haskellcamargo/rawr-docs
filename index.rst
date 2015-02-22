Welcome to Rawr documentation!
==============================

.. toctree::
  :maxdepth: 2

  intro
  require
  setup
  config
  user
  faq
  developers
  vendors
  copyright
  credits
  glossary


===============
Welcome to Rawr
===============

.. image:: http://i.imgur.com/CievcE1.png

-------------
What is Rawr?
-------------

Rawr is a word that means "I love you" in dinosaur, but it also is this small library build to implement a lot of features to the PHP language.
Rawr is an open-source project meant to make the PHP language a few better, as much as it has a lot of little failures that sometimes let me angry. The project started after a big criticism to PHP and its inconsistence with function names and the design of the language. To solve a big part of these problems, we got Rawr. It implements and simulates static-typing (via contracts by wrappers), functional programming (piping, method-chaining, monads, typeclasses, algebraic-data-types, pattern-matching), a more pure object-orientation (with the concept of Self and Smalltalk OO, where everything is an object that can receive and pass messages) and the concept of modules, in a way similar as Python or Haskell do, aiming a more pure way to program and taking into account that so many developers do several mistakes and workarouns with PHP. Rawr is build to be type-safe and for applications that require to not crash.

-------------
Static typing
-------------

Different from Java, where primitives aren't objects, here each type is literally a class and each value of a rawr-defined variable is a pure object. As much as Alan Kays definition of object-orientation, the objects have behaviors and Rawr also allows method-chaining in order to make the things and calls easier. You can also restrict function parameters to specified types or derived types to assert type-safety:

.. literalinclude:: introduction/examples/static_typing.php
   :language: php
   :linenos:

Some types are derived, this is, as example, ``Int`` and ``Float`` are derived from ``Num`` type, therefore we can make a function that accepts any of them as a parameter:

.. literalinclude:: introduction/examples/static_typing.php
   :language: php
   :linenos:

Rawr uses a Haskell-like type-system, you can use almost of Haskell type definitions here, with PHP.

----------------------
Functional programming
----------------------

Rawr implements several functional concepts, such as function-composition, pattern-matching, monads or algebraic-data-types.

.. literalinclude:: introduction/examples/functional_programming.php
   :language: php
   :linenos:

You can easily handle lists by chaining methods:

.. literalinclude:: introduction/examples/functional_programming1.php
   :language: php
   :linenos:

----------------------------------
Smalltalk-based object orientation
----------------------------------

In Rawr, almost everything is an object. The behaviors of these objects are determined according to their types, e.g.: objects of ``Str`` class can have a side-effect behavior called ``putStrLn`` that outputs its content to screen, as much as objects of bool atoms, ``true`` and ``false`` can have behaviors like ``ifTrue`` and ``ifFalse``. You don't use conditionals, loops or other imperative structures. You enjoy the pureness of well-designed languages to work with your computations:

.. literalinclude:: introduction/examples/object_orientation.php
   :language: php
   :linenos:

-----------------------------------------------
Monads for work with computations that may fail
-----------------------------------------------

Rawr implements also most of Haskell built-in monads, such as ``Maybe`` and ``Either``. You can chain operations and work with computations that may fail, you can also apply pattern-matching to check for your results. In Rawr, you use no exceptions, there is no errors. You can have a data-type for errors in ``Data.Error`` that is returned when something goes wrong. You can match its pattern.

.. literalinclude:: introduction/examples/monads.php
   :language: php
   :linenos:

---------------------------
Prototype-based-programming
---------------------------

Rawr also supports a Self/Javascript based prototype programming, in a much more expressive way than class-based-programming does, and also provides first class data-types for better data-abstraction:

.. literalinclude:: introduction/examples/prototype_based_programming.php
   :language: php
   :linenos: