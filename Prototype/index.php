<?php

/**
 * Design pattern "Prototype" (Creational)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Any Class
 */
class MyClass
{
    /**
     * Any methods
     */
    public function method()
    {
        echo 'MyClass method <br>';
    }
}


/**
 * demo
 */

/**
 * create Class
 */
$my = new MyClass();

/**
 * clone class
 */
$clone = clone $my;
$clone->method();
/*
    MyClass method 
*/

/**
 * delete MyClass
 */
unset($my);

/**
 * clone lives
 */
$clone->method();
/*
    MyClass method 
*/


# end of file