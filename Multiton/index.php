<?php

/**
 * Design pattern "Multiton" (Creational)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Base
 */
trait MultitonTrait
{
    private static $list = [];

    public static function getInstance(string $instance = 'default')
    {
        if (empty(self::$list[$instance])) self::$list[$instance] = new static();
        
        return self::$list[$instance];
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
     * Add MultitonTrait to this class
     */
    use MultitonTrait;

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
 * demo use 
 * see Singleton for other samples
 */

echo '<pre>'; // for print in browser

# $foo = new Foo(); // Error: Call to private Foo::__construct()

/**
 * get instance "Alpha"
 */
$foo1 = Foo::getInstance('Alpha');

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
 * new instance "Beta"
 */
$foo2 = Foo::getInstance('Beta');
$foo2->addVal('1000');
$foo2->addVal('2000');

/**
 * control
 */
print_r($foo2->getVal());
/*
    Array
    (
        [0] => 1000
        [1] => 2000
    )
 */

/**
 * new instance "default"
 */
$foo3 = Foo::getInstance();
$foo3->addVal('Abcde');
$foo3->addVal('12345');

/**
 * control
 */
print_r($foo3->getVal());
/*
    Array
    (
        [0] => Abcde
        [1] => 12345
    )
 */

# end of file