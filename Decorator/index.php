<?php

/**
 * Design pattern "Decorator" (Structural)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Base class for Component
 */
abstract class ComponentAbstract
{
    abstract public function operation();
}

/**
 * Component
 */
class Component extends ComponentAbstract
{
    public function operation()
    {
        echo 'Component operation <br>';
    }
}

/**
 * Base for Decorator
 */
abstract class DecoratorAbstract
{
    protected $component;

    /**
     * accept Component
     */
    public function __construct($component)
    {
        $this->component = $component;
    }
}

/**
 * Decorator for Component
 */
class Decorator extends DecoratorAbstract
{
    /**
     * New operation with Component
     */
    public function operation()
    {
        echo 'Decorator 1 <br>';
        $this->component->operation();
        echo 'Decorator 2 <br>';
    }
}

/**
 * demo
 */

/**
 * create Decorator for Component
 */
$decoratedComponent = new Decorator(
    new Component()
);

/**
 * run operation
 */
$decoratedComponent->operation();
/*
    Decorator 1 
    Component operation 
    Decorator 2 
 */

 
# end of file