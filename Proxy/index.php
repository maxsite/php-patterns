<?php

/**
 * Design pattern "Proxy" (Structural)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Real Class
 */
class RealClass
{
    public function operation1()
    {
        echo 'RealClass operation 1 <br>';
    }

    public function operation2()
    {
        echo 'RealClass operation 2 <br>';
    }
}

/**
 * Proxy for Real Class
 */
class ProxyClass
{
    protected $class;

    public function __construct()
    {
        $this->class = new RealClass();
    }

    /**
     * execute RealClass operation1
     */
    public function run1()
    {
        $this->class->operation1();
    }

    /**
     * execute RealClass operation2
     */
    public function run2()
    {
        $this->class->operation2();
    }
}


/**
 * demo
 */

/**
 * create Decorator for Real Class
 */
$p = new ProxyClass();

$p->run1();
$p->run2();
/*
    RealClass operation 1 
    RealClass operation 2 
 */


# end of file