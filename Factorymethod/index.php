<?php

/**
 * Design pattern "Factory method" / "Virtual Constructor" (Creational)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Base class
 */
abstract class CommonAbstract
{
    /**
     * Create new class
     */
    public static function initial($class)
    {
        return new $class();
    }

    /**
     * Common methods
     */
    abstract public function run();
}

/**
 * Class1 for sample
 */
class Class1 extends CommonAbstract
{
    public function run()
    {
        echo 'Class1 run<br>';
    }
}

/**
 * Class2 for sample
 */
class Class2 extends CommonAbstract
{
    public function run()
    {
        echo 'Class2 run<br>';
    }
}


/**
 * demo
 */

$a = CommonAbstract::initial('Class1');
$a->run();
/*
    Class1 run
 */

$b = CommonAbstract::initial('Class2');
$b->run();
/*
    Class2 run
 */

# end of file