<?php

/**
 * Design pattern "Abstract factory" (Creational)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Base Interface for Factory's
 */
interface FactoryInterface
{
    public function method();
}

/**
 * Class for FactoryA
 */
class ConcreteFactoryA implements FactoryInterface
{
    protected $class;

    /**
     * Use Class1
     */
    public function __construct()
    {
        $this->class = new Class1();
    }

    /**
     * run method class1
     */
    public function method()
    {
        $this->class->method();
    }
}

/**
 * Class for FactoryB
 */
class ConcreteFactoryB implements FactoryInterface
{
    protected $class;

    /**
     * Use Class2
     */
    public function __construct()
    {
        $this->class = new Class2();
    }

    /**
     * run method class2
     */
    public function method()
    {
        $this->class->method();
    }
}

/**
 * implementation in Class1
 */
class Class1
{
    public function method()
    {
        echo 'Class1 method<br>';
    }
}

/**
 * implementation in Class2
 */
class Class2
{
    public function method()
    {
        echo 'Class2 method<br>';
    }
}

/**
 * demo
 */

/**
 * create FactoryA
 */
$a = new ConcreteFactoryA();
$a->method(); // Class1 method

/**
 * create FactoryB
 */
$b = new ConcreteFactoryB();
$b->method(); // Class2 method

# end of file
