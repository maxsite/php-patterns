<?php

/**
 * Design pattern "Singleton" (Creational)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Base
 */
trait SingletonTrait
{
	private static $instance;

	public static function getInstance()
	{
		if (empty(self::$instance)) self::$instance = new static();

		return self::$instance;
	}

	private function __construct()
	{
	}
	private function __clone()
	{
	}
	private function __wakeup()
	{
	}
}

/**
 * Class for sample
 */
class Foo
{
	/**
	 * Add SingletonTrait to this class
	 */
	use SingletonTrait;

	/**
	 * Class's own methods...
	 */
	private $var = [];

	public function addVal($v)
	{
		$this->var[] = $v;
	}

	public function getVal()
	{
		return $this->var;
	}
}


/**
 * demo
 */

echo '<pre>'; // for print in browser

# $foo = new Foo(); // Error: Call to private Foo::__construct()

/**
 * get instance in $foo1
 */
$foo1 = Foo::getInstance();

/**
 * add values
 */
$foo1->addVal('first');
$foo1->addVal('second');

/**
 * control
 */
print_r($foo1->getVal()); 
/*
    Array
    (
        [0] => first
        [1] => second
    )
 */

/**
 * new variable $foo2
 */
$foo2 = Foo::getInstance();
print_r($foo2->getVal());
/*
    Array
    (
        [0] => first
        [1] => second
    )
 */

/**
 * add value to $foo
 */
$foo1->addVal('new value');

/**
 * control $foo1
 */
print_r($foo1->getVal());
/*
    Array
    (
        [0] => first
        [1] => second
		[2] => new value
    )
 */

/**
 * control $foo2
 */
print_r($foo2->getVal());
/*
    Array
    (
        [0] => first
        [1] => second
		[2] => new value
    )
 */


# end of file