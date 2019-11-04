<?php

/**
 * Design pattern "Bridge" (Structural)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Available methods 
 */
interface BridgeInterface
{
    public function method1();
    public function method2();
}

/**
 * implementation first
 */
class Bridge1 implements BridgeInterface
{
    public function method1()
    {
        echo 'Bridge1 method1 <br>';
    }

    public function method2()
    {
        echo 'Bridge1 method2 <br>';
    }
}

/**
 * implementation second
 */
class Bridge2 implements BridgeInterface
{
    public function method1()
    {
        echo 'Bridge2 method1 <br>';
    }

    public function method2()
    {
        echo 'Bridge2 method2 <br>';
    }
}

/**
 * main application Abstract
 */
abstract class AppAbstract
{
    protected $bridge;

    public function __construct(BridgeInterface $bridge)
    {
        $this->bridge = $bridge;
    }

    public function method1()
    {
        $this->bridge->method1();
    }

    public function method2()
    {
        $this->bridge->method2();
    }
}

/**
 * main application
 */
class App extends AppAbstract
{
    public function run()
    {
        $this->method1();
        $this->method2();
    }
}

/**
 * demo
 */

$a = new App(new Bridge1()); // application for Bridge1
$a->run();
/*
    Bridge1 method1 
    Bridge1 method2 
*/

$b = new App(new Bridge2()); // application for Bridge2
$b->run();
/*
    Bridge2 method1 
    Bridge2 method2 
*/


# end of file